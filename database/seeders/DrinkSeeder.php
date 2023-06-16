<?php

namespace Database\Seeders;

use App\Models\Drink;
use Illuminate\Database\Seeder;

class DrinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drinksData = [
            [
                'name' => 'Whisky',
                'description' => 'Whisky or whiskey is a type of liquor made from fermented grain mash. Various grains (which may be malted) are used for different varieties, including barley, corn, rye, and wheat. Whisky is typically aged in wooden casks, which are typically made of charred white oak. Uncharred white oak casks previously used for the aging of port, rum or sherry are also sometimes used. Whisky is a strictly regulated spirit worldwide with many classes and types. The typical unifying characteristics of the different classes and types are the fermentation of grains, distillation, and aging in wooden barrels',
                'alcohol_content' => 40,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/0/0c/Scotch_Whisky_%28aka%29.jpg'
            ],
            [
                'name' => 'Brandy',
                'description' => 'Brandy is a liquor produced by distilling wine. Brandy generally contains 35–60% alcohol by volume (70–120 US proof) and is typically consumed as an after-dinner digestif. Some brandies are aged in wooden casks. Others are coloured with caramel colouring to imitate the effect of ageing, and some are produced using a combination of ageing and colouring. Varieties of wine brandy can be found across the winemaking world. Among the most renowned are Cognac and Armagnac from south-western France. In a broader sense, the term brandy also denotes liquors obtained from the distillation of pomace (yielding pomace brandy), or mash or wine of any other fruit (fruit brandy).[3][1] These products are also called eau de vie (which translates to "water of life").',
                'alcohol_content' => 40,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/7/7f/Cicero-Brandy-250ml-stacked-900-by-1100.jpg'
            ],
            [
                'name' => 'Vodka',
                'description' => "Vodka (Polish: wódka [ˈvutka], Russian: водка [ˈvotkə], Swedish: vodka [vɔdkɑː]) is a clear distilled alcoholic beverage. Different varieties originated in Poland, Russia, and Sweden. Vodka is composed mainly of water and ethanol but sometimes with traces of impurities and flavourings. Traditionally, it is made by distilling liquid from fermented cereal grains, and potatoes since introduced in Europe in the 1700's. Some modern brands use corn, sugar cane, fruits, honey, and maple sap as the base. Since the 1890s, standard vodkas have been 40% alcohol by volume (ABV) (80 U.S. proof). The European Union has established a minimum alcohol content of 37.5% for vodka. Vodka in the United States must have a minimum alcohol content of 40%. Vodka is traditionally drunk neat (not mixed with water, ice, or other mixers), and it is often served freezer chilled in the vodka belt of Belarus, Estonia, Finland, Iceland, Latvia, Lithuania, Norway, Poland, Russia, Sweden, and Ukraine. It is also used in cocktails and mixed drinks, such as the vodka martini, Cosmopolitan, vodka tonic, screwdriver, greyhound, Black or White Russian, Moscow mule, Bloody Mary, and Caesar.",
                'alcohol_content' => 38,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Monopolowa_Baczewski.JPG'
            ],
            [
                'name' => 'Wine',
                'description' => "Wine is an alcoholic drink typically made from fermented grapes. Yeast consumes the sugar in the grapes and converts it to ethanol and carbon dioxide, releasing heat in the process. Different varieties of grapes and strains of yeasts are major factors in different styles of wine. These differences result from the complex interactions between the biochemical development of the grape, the reactions involved in fermentation, the grape's growing environment (terroir), and the wine production process. Many countries enact legal appellations intended to define styles and qualities of wine. These typically restrict the geographical origin and permitted varieties of grapes, as well as other aspects of wine production. Wines can be made by fermentation of other fruit crops such as plum, cherry, pomegranate, blueberry, currant and elderberry.",
                'alcohol_content' => 9,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/8/88/Glass_of_Red_Wine_with_a_bottle_of_Red_Wine_-_Evan_Swigart.jpg'
            ],
            [
                'name' => 'Beer',
                'description' => 'Beer is one of the oldest types of alcoholic drinks in the world, and the most widely consumed. It is the third most popular drink overall after potable water and tea. It is produced by the brewing and fermentation of starches, mainly derived from cereal grains—most commonly malted barley, though wheat, maize (corn), rice, and oats are also used. During the brewing process, fermentation of the starch sugars in the wort produces ethanol and carbonation in the resulting beer. Most modern beer is brewed with hops, which add bitterness and other flavours and act as a natural preservative and stabilising agent. Other flavouring agents such as gruit, herbs, or fruits may be included or used instead of hops. In commercial brewing, the natural carbonation effect is often removed during processing and replaced with forced carbonation.',
                'alcohol_content' => 5,
                'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/c/ca/Bro_Code_Beer_01.jpg'
            ],
        ];

        foreach ($drinksData as $drink) {
            Drink::create($drink);
        }
    }
}