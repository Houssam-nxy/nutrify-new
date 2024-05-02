## Nutrify: Personalized AI Nutrition Assistant

**Nutrify** is a web application that helps users create personalized meal plans with a focus on healthy eating. It leverages AI to generate unique recipe suggestions based on user input such as:

* Dietary preferences (vegetarian, vegan, gluten-free, etc.)
* Health conditions (optional)
* Taste preferences

**Key Functionalities:**

* **User Input:** Users can provide information about their dietary needs and preferences.
* **AI-powered Recipe Generation:** The application utilizes the Gemini API to generate unique and delicious recipe suggestions tailored to the user's profile. 
* **Recipe Exploration:** Users can browse through the suggested recipes and save their favorites.
* **Meal Plan Creation:** Users can build customized meal plans for the week by selecting and combining saved recipes.

**Benefits for Users:**

* **Personalized approach:** Nutrify caters to individual needs and preferences.
* **Discovery of new recipes:**  The AI helps users explore new and interesting recipe ideas.
* **Simplified meal planning:**  The application helps users create balanced and healthy meal plans effortlessly.

**Technologies:**

* Frontend: HTML, CSS, Javascript (optional for interactive elements)
* Backend: Laravel (PHP framework)
* AI Model: Gemini API (Generative AI for recipe creation)

**Getting Started (For Developers):**

1. Clone this repository.
2. Install dependencies using `composer install`.
3. Configure your `.env` file with necessary credentials (database connection, Gemini API key).
4. Run database migrations using `php artisan migrate`.
5. (Optional) Seed your database with sample data using `php artisan db:seed`.
6. Start the development server using `php artisan serve`.

**Contributing:**

We welcome contributions to this project! Please refer to the contribution guidelines in the `CONTRIBUTING.md` file before submitting a pull request.

**License:**

This project is licensed under the MIT License. See the `LICENSE` file for details.
