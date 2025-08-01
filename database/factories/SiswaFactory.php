<?php

namespace Database\Factories;

use App\Models\Mentor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'nim' => fake()->numberBetween(6702223000, 6702223999),
            'tanggal_lahir' => fake()->dateTimeBetween('-20 years', '-15 years')->format('Y-m-d'),
            'jurusan' => fake()->randomElement([
                'Teknik Komputer',
                'Teknik Elektro',
                'MBTI',
                'Teknik Informatika',
                'Sistem Informasi'
            ]),
            'mentor_id' => Mentor::inRandomOrder()->first()->id
        ];
    }
}
