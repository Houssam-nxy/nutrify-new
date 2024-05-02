<?php

namespace App\Http\Controllers\Recipe;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\HealthData;
use Gemini\Laravel\Facades\Gemini;


class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = auth()->id();
        $recipes = Recipe::where('user_id', $userId)->latest()->get();
        return view('recipes.index', ['recipes' => $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        
        // Validate the incoming request
        $validatedData = $request->validate([
            'title' => 'required|string',
            'dietary_restrictions' => 'nullable|string',
            'cuisines' => 'nullable|string',
            'dish_preference' => 'nullable|string',
            'cook_time' => 'nullable|string',
            'vegetarian' => 'nullable|string',
            'about' => 'nullable|string',
        ]);

        // Extract the title from the validated data
        $title = $validatedData['title'];
        $vegetarianPreference = $validatedData['vegetarian'];
        $healthData = HealthData::where('user_id', auth()->id())->first();

        // Form the prompt message
        $prompt = "Greetings! I'm seeking a personalized healthy recipe recommendation that aligns with my dietary preferences and health profile. Here's a snapshot of my details: " . 
        json_encode($validatedData) . 
        "Additionally, for a more comprehensive view of my health, here are some specifics: " . 
        "Height: " . $healthData->height . ", " . 
        "Weight: " . $healthData->weight . ", " . 
        "Age: " . $healthData->age . ", " . 
        "Gender: " . $healthData->gender . ", " . 
        "Condition: " . $healthData->condition . ", " . 
        "Ethnicity: " . $healthData->ethnicity . ", " . 
        "Vegetarian: " . $vegetarianPreference . ". " .
        "About me: " . $healthData->about . ". " . 
        "I prioritize health-conscious options and would appreciate recommendations for nutritious and delicious dishes. " . 
        "Could you kindly suggest a recipe that meets these criteria? The format should include details on ingredients, instructions, and any helpful tips. " . 
        "Please respond using the following HTML and Tailwind CSS structure for a clean and professional presentation: 
        <div class='container mx-auto px-4'>
            <div class='bg-white p-4'>
                <h1 class='text-lg text-center font-bold'><strong>Title</strong></h1>
                <br>
                <br>
                <ul class='list-disc ml-4 text-sm'>
                    <li><strong>add time here</strong><!-- (Time) --></li>
                    <li><strong>Add Difficulty here</strong><!-- (Easy - medium - difficult) --></li>
                </ul>
                <br>
                <h2>Ingredients:</h2>
                <ul class='list-disc ml-4 text-sm'>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                    <!-- as needed -->
                </ul>
                <br>
                <h2>Instructions:</h2>
                <ol class='list-decimal ml-4 text-sm'>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                    <!-- as needed -->
                </ol>
                <br>
                <h2>Tips:</h2>
                <ul class='list-disc ml-4 text-sm'>
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <li>Option 4</li>
                    <!-- as needed -->
                </ul>
            </div>
        </div>. 
        Thank you for your assistance!";

        $response = Gemini::geminiPro()->generateContent($prompt);
        $recipeText = $response->text();

        // Save the recipe to the database
        $recipe = new Recipe();
        $recipe->title = $title;
        $recipe->description = $recipeText;
        $recipe->user_id = auth()->id();

        $recipe->save();

        return redirect()->route('recipe.index')->with('success', 'Recipe saved successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Find the ID
        $recipeData = Recipe::findOrFail($id);

        // Check if the authenticated user is the owner of the health data
        if ($recipeData->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }
        
        $recipe = Recipe::findOrFail($id);
        return view('recipes.show', compact('recipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Find the health data by ID
        $recipeData = Recipe::findOrFail($id);

        // Check if the authenticated user is the owner of the health data
        if ($recipeData->user_id !== auth()->id()) {
            abort(403, 'Unauthorized action.');
        }

        $recipe = Recipe::findOrFail($id);
        $recipe->delete();

        return redirect()->route('recipe.index')->with('success', 'Recipe deleted successfully.');
        
    }
}
