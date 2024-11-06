<?php

namespace Database\Seeders;

use App\Models\Survey;
use Illuminate\Database\Seeder;

class SurveySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Survey::create([
            'survey_data' => json_encode([
                "title" => "Survey Pengalaman Pembaca Laravel Blog",
                "description" => "Terima kasih telah mengunjungi blog kami! Kami ingin mendengar pendapat Anda untuk meningkatkan kualitas konten dan pengalaman pengguna di blog kami. Isi survei singkat ini untuk memberi kami masukan berharga yang akan membantu kami menyajikan konten yang lebih bermanfaat dan menarik bagi Anda. Survei ini hanya akan memakan waktu beberapa menit dan semua jawaban Anda akan dijaga kerahasiaannya. Terima kasih atas partisipasinya!",
                "logoPosition" => "right",
                "pages" => [
                    [
                        "name" => "page1",
                        "elements" => [
                            [
                                "type" => "rating",
                                "name" => "Bagaimana penilaian Anda terhadap kualitas konten yang ada di blog kami?",
                                "title" => "Bagaimana penilaian Anda terhadap kualitas konten yang ada di blog kami?",
                                "isRequired" => true,
                                "autoGenerate" => false,
                                "rateValues" => [
                                    ["value" => "Sangat buruk", "text" => "Sangat Buruk"],
                                    "Buruk",
                                    "Cukup",
                                    "Baik",
                                    ["value" => "Sangat baik", "text" => "Sangat Baik"]
                                ]
                            ],
                            [
                                "type" => "radiogroup",
                                "name" => "Apakah artikel-artikel yang diposting mudah dipahami",
                                "title" => "Apakah artikel-artikel yang diposting mudah dipahami",
                                "isRequired" => true,
                                "choices" => [
                                    ["value" => "Sangat mudah", "text" => "Ya, sangat mudah dipahami"],
                                    ["value" => "Cukup mudah", "text" => "Cukup mudah dipahami"],
                                    ["value" => "Tidak terlalu mudah", "text" => "Tidak terlalu mudah dipahami"],
                                    "Tidak sama sekali"
                                ]
                            ],
                            [
                                "type" => "radiogroup",
                                "name" => "Seberapa sering mengunjungi blog",
                                "title" => "Seberapa sering Anda mengunjungi blog kami?",
                                "isRequired" => true,
                                "choices" => [
                                    "Setiap hari",
                                    ["value" => "Beberapa kali", "text" => "Beberapa kali seminggu"],
                                    "Seminggu sekali",
                                    "Jarang",
                                    "Ini pertama kali"
                                ]
                            ],
                            [
                                "type" => "rating",
                                "name" => "Tampilan dan Desain Blog",
                                "title" => "Bagaimana Anda menilai tampilan dan desain blog kami?",
                                "isRequired" => true,
                                "autoGenerate" => false,
                                "rateValues" => [
                                    "Sangat buruk",
                                    "Buruk",
                                    "Cukup",
                                    "Baik",
                                    "Sangat baik"
                                ]
                            ],
                            [
                                "type" => "radiogroup",
                                "name" => "Apakah akan merekomendasikan blog",
                                "title" => "Apakah Anda akan merekomendasikan blog ini kepada teman atau kolega?",
                                "isRequired" => true,
                                "choices" => [
                                    "Ya, pasti",
                                    "Mungkin",
                                    "Tidak"
                                ]
                            ],
                            [
                                "type" => "comment",
                                "name" => "Saran dan Kritik",
                                "title" => "Berikan Saran dan Kritik yang diperlukan untuk mengembangkan Laravel Blog ini",
                                "isRequired" => true
                            ]
                        ]
                    ]
                ]
            ]),
        ]);
    }
}
