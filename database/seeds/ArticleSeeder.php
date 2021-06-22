<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'user_id' => '2',
                'category_id' => '1',
                'title' => 'Nusa Dua Beach, Bali',
                'description' => 'Nusa Dua Beach shows you what a Balinese beach is all about: sugary white sand, tranquil waters, and plenty of nearby attractions. It\'s like a postcard of a tropical island hideaway brought to life — especially at sunrise, when the sky casts a crimson glow on the sapphire sea.
                Just a 20-minute drive from the Ngurah Rai International Airport, Nusa Dua Beach is a convenient place to soak up the sun on a short trip to Bali. The calm surf makes this beach an ideal attraction for families looking for a safe place to swim and sunbathe for hours on end. Plus, Nusa Dua Beach is home to some of the top-rated family resorts in Bali, like The St. Regis Bali Resort, which will take care of your every need on your trip to Indonesia. This is the stuff beach vacation dreams are made of.
                Don\'t just stay on the sand, though. There are many tour operators who offer glass-bottom boat trips, which showcase the marine life that flourishes beneath the surface of the water. Other attractions around Nusa Dua Beach include self-drive jet skis, underwater sea walker experiences, and parasailing.
                ',
                'image' => 'nusa_dua.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '3',
                'category_id' => '1',
                'title' => 'Pink Beach, Komodo Island',
                'description' => 'Most tourists visit Komodo Island in search of the destination\'s eponymous dragons — the largest lizards in the world. The species has been protected since 1980 at the island\'s Komodo National Park, a UNESCO World Heritage Site that welcomes tens of thousands of tourists every year.
                But Komodo Dragons aren\'t the only attraction on this island. The destination is also home to one of the best beaches in Indonesia, Pink Beach. The area gets its name from its flamingo-pink sand that looks like something in a Dr. Seuss story. Its rare blushing color comes from the red shells of tiny coral insects known as foraminifera that mix with white sand, giving the beach its eye-popping pink tint.
                More than just a colorful environment, Komodo\'s Pink Beach is also a delight for divers. Coral gardens in the serene, shallow waters offer tourists plenty to explore with a snorkel or scuba gear.
                ',
                'image' => 'komodo_island.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '4',
                'category_id' => '1',
                'title' => 'Gili Trawangan, Lombok',
                'description' => 'The Gili Islands, a cluster of three tiny islands to the northwest of Lombok, have long been a favorite destination for island-hopping backpackers in Indonesia. They maintain a unique charm and a laid-back atmosphere that hits all the right notes for a fun weekend.
                While each of the Gili Islands has stunning coastlines, Gili Trawangan boasts some of the best beaches in all of Indonesia. Think gentle turquoise waters washing up on glistening white sand, shaded by flowering trees. They feel like a world away from Gili T\'s main drag of lively restaurants and beach clubs. It\'s worth renting a bike to explore the beaches during your stay on this car-free island.
                If your hotel or lodge lends out snorkeling gear, take advantage of the offer. The waters around Gili T are filled with vibrant marine life, especially sea turtles. You can often find the graceful shelled creatures swimming just 15 or 20 meters from the beach. Seeing sea turtles in the wild is a magical experience that might become your favorite memory of your trip to Indonesia.
                ',
                'image' => 'gili_trawangan.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '5',
                'category_id' => '2',
                'title' => 'Mount Agung, Bali',
                'description' => 'The highest mountain in Bali, Mount Agung is 3,142 metres tall and is a spiritually important mountain for the Balinese people, the location of the Mother Temple of Besakih. You can hike up this mountain in six to seven hours, an adventure rewarded with gorgeous views.',
                'image' => 'mount_agung.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '6',
                'category_id' => '2',
                'title' => 'Mount Batur, Bali',
                'description' => 'Arguably the most popular mountain for hiking in Bali, Mount Batur stand 1,700 metres tall. Its summit overlooks Lake Batur and the rural landscapes that characterise this popular tourist island. The hike is fairly short, taking about two hours to reach the summit. If you’re spending significant time in Bali, this hike is an excellent activity to do when you get bored of spending time on the beach all day.',
                'image' => 'mount_batur.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '7',
                'category_id' => '2',
                'title' => 'Mount Kerinci, Sumatera',
                'description' => 'This is the tallest mountain in Sumatra and the highest volcano in Indonesia. Located within Kerinci Seblat National Park, this mighty mountain can be conquered during a three-day trek. On the way, you might even spot iconic animals like the Sumatran rhino or the Sumatran tiger. From the summit, you can take in a view that encompasses a rural landscape dotted with fifteen lakes, including Gunung Tujuh Lake, the highest lake in Southeast Asia.',
                'image' => 'mount_kerinci.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '8',
                'category_id' => '3',
                'title' => 'Borobudur, Magelang',
                'description' => 'Borobudur in Central Java is the world’s largest Buddhist temple. And the structure is here to stay. Borobudur has survived volcanic eruptions of Gunung Merapi, terrorist bombings and the earthquake of 2006. Rising high above the breathtakingly green rice fields and their accompanying kampung, or rice villages, this monumental structure can make Indonesia’s other temples look pedestrian. It looks like an ornately carved pyramid with fortified walls surrounding the bottom and five stories worth of statues ascending to the top. In fact, the central dome is crowned by an impressive 72 Buddha statues. Perhaps the most impressive thing about the monument is that it was built by hand in the 9th century. And visitors agree — it looks like it will stand forever.',
                'image' => 'borobudur.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '9',
                'category_id' => '3',
                'title' => 'Prambanan, Sleman',
                'description' => 'The largest Hindu temple in all of Indonesia sits in the middle of the now-Muslim island of Java. Often referred to as the Hindu Masterpiece, this incomparable Temple is still being reconstructed. In fact, that’s the first thing you’ll notice as you walk into the park of Prambanan as the stone ruins of 224 outer temples lay scattered. As you ascend into the center of the temple area, you’ll find eight major and eight minor temples. These ornately carved spires praise Trimurti, or the expression of God as Brahma the Creator, Vishnu the Preserver and Shiva the Destroyer. Marvel at the preservation of this mid-9th-century construction.',
                'image' => 'prambanan.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '10',
                'category_id' => '3',
                'title' => 'Tanah Lot, Bali',
                'description' => 'Carved into a rock formation jutting out from the sea, Tanah Lot Temple attracts thousands of visitors per year. This structure serves as the west point of Bali’s four major directional temples. In fact, you can see the south’s Pura Luhur Uluwatu high on its cliff during a clear day. The temple sits on its own island and is only accessible by foot during low tide. The original rock formation crumbled but the Balinese reconstructed the small island because of the temple’s popularity. This wave-licked temple is perhaps the most photographed spot on the island, especially during sunset.',
                'image' => 'tanah_lot.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '11',
                'category_id' => '4',
                'title' => 'Taman Safari, Bogor',
                'description' => 'Taman Safari Indonesia Bogor was built in 1980 on a quina (Cinchona) plantation which is no longer productive, covering an area of 50 hectares. This park was designated as a National Tourist Attraction and was inaugurated as a Center for Endangered Animal Breeding in Indonesia on March 16, 1990.
                Now, the area of Taman Safari has grown to 168 hectares and equipped with various educational and recreational facilities including to holds night safaris on weekends and long holidays. This zoo has around 2500 animals originating from various area of the world. Ranging from animals that are commonly found to endangered protected animals such as Bengal tigers, orangutans, anoa, dragons and many more.
                Taman Safari Indonesia has also developed another zoos in two areas which are Taman Safari Indonesia 2 (Prigen) located on the slopes of Mount Arjuno, Prigen District, Pasuruan Regency, East Java, and Taman Safari Indonesia 3 (Bali Safari & Marine Park) in Serongga Village, Gianyar, Bali.
                ',
                'image' => 'taman_safari.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '2',
                'category_id' => '4',
                'title' => 'Ragunan Wildlife Park, South Jakarta',
                'description' => 'Ragunan Wildlife Park, formerly called Planten En Dierentuin, stands on 140 hectares of land and was built in 1864. For residents of Jakarta, this zoo is one of popular family vacation destinations. Ragunan Wildlife Park presents a variety of exciting tourist activities. Besides being able to see around 295 species of animals with 4040 specimens, you can also go around the zoo by train, ride a swan boat, ride a horse, ride a single bicycle or a double bicycle to explore around the zoo. Even here you will not only see various species of animals, but also beautiful orchids in Ragunan Orchid Park.',
                'image' => 'ragunan.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ],
            [
                'user_id' => '3',
                'category_id' => '4',
                'title' => 'Batu Secret Zoo, Malang',
                'description' => 'Batu Secret Zoo is one of tourist attractions in Batu, Malang, with zoo theme park concept. The concept is a zoo park which is arranged in a modern draft and has complete collection of animals. This zoo is also part of Jatim Park 2 which offers educational tours for you and your family.
                Moreover, in this complex there is also an Animal Museum that can be visited to see some animals and also some of animal skeletons. Various animal collections are well maintained here and safe enough for children visit because between visitors and animals are limited by glass barriers.
                ',
                'image' => 'batu_secret_zoo.jpg',
                'created_at' => '2021-02-11 17:30:40',
                'updated_at' => '2021-02-11 17:30:40'
            ]
            ]);
    }
}
