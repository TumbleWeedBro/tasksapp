<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Task;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    /**
     * Truncate a sentence to a specified character count range.
     *
     * @param string $sentence The original sentence
     * @param int $minChars The minimum character count
     * @param int $maxChars The maximum character count
     * @return string The truncated sentence
     */
    private function truncateSentence($sentence, $minChars, $maxChars) {
        // Check if the sentence is within the desired character count range
        if (mb_strlen($sentence, 'UTF-8') >= $minChars && mb_strlen($sentence, 'UTF-8') <= $maxChars) {
            return $sentence; // No need to truncate
        }
    
        // Truncate the sentence to fit within the character count range
        return mb_substr($sentence, 0, $maxChars, 'UTF-8');
    }
    public function definition()
    {
        return [
            'task_title' => $this->truncateSentence($this->faker->sentence, 50, 60),
            'task_content' => $this->faker->paragraph,
            'slug' => $this->faker->unique()->slug,
            'due_date' => $this->faker->dateTimeBetween('now', '+30 days')->format('Y-m-d'),
            'urgency' => $this->faker->randomElement(['low', 'medium', 'high']),
        ];
    }
}
