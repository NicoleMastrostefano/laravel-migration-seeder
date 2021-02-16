<?php

use Illuminate\Database\Seeder;
use App\Article;
use Faker\Generator as Faker;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $article = new Article();
        $article->title = $faker->words(4, true);
        $article->subtitle = $faker->sentence(6,true);
        $article->text = $faker->paragraphs(4, true);
        $article->author = $faker->name;
        $article->publication_date = $faker->dateTimeThisYear($max = 'now');
        $article->save();

      }
    }
}




// Faker\Provider\Lorem
// word                                             // 'aut'
// words($nb = 3, $asText = false)                  // array('porro', 'sed', 'magni')
// sentence($nbWords = 6, $variableNbWords = true)  // 'Sit vitae voluptas sint non voluptates.'
// sentences($nb = 3, $asText = false)              // array('Optio quos qui illo error.', 'Laborum vero a officia id corporis.', 'Saepe provident esse hic eligendi.')
// paragraph($nbSentences = 3, $variableNbSentences = true) // 'Ut ab voluptas sed a nam. Sint autem inventore aut officia aut aut blanditiis. Ducimus eos odit amet et est ut eum.'
// paragraphs($nb = 3, $asText = false)             // array('Quidem ut sunt et quidem est accusamus aut. Fuga est placeat rerum ut. Enim ex eveniet facere sunt.', 'Aut nam et eum architecto fugit repellendus illo. Qui ex esse veritatis.', 'Possimus omnis aut incidunt sunt. Asperiores incidunt iure sequi cum culpa rem. Rerum exercitationem est rem.')
// text($maxNbChars = 200)                          // 'Fuga totam reiciendis qui architecto fugiat nemo. Consequatur recusandae qui cupiditate eos quod.'
