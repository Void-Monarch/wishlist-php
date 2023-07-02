
use db;
create table content(c_id int(5) primary key auto_increment,
c_name varchar(225) not null,
c_epi int(8),
c_content text,
c_category varchar(225) not null,
c_img text,
c_link text,
c_tags text);

use db;
insert into content(c_name,c_content,c_category,c_img,c_link,c_tags,c_epi) values('naruto','Moments prior to Naruto Uzumakis birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure, the Hidden Leaf Village, and wreaked havoc. In order to put an end to the Kyuubi s rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.

Now, Naruto is a hyperactive and knuckle-headed ninja still living in Konohagakure. Shunned because of the Kyuubi inside him, Naruto struggles to find his place in the village, while his burning desire to become the Hokage of Konohagakure leads him not only to some great new friends, but also some deadly foes.',
'anime','../assests/cont_assests/naruto_img.jpg','https://gogoanimeapp.com/category/naruto','naruto,big three,uzumaki',220),
('One piece',
'Gol D. Roger was known as the "Pirate King," the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece. It was this revelation that brought about the Grand Age of Pirates, men who dreamed of finding One Piece—which promises an unlimited amount of riches and fame—and quite possibly the pinnacle of glory and the title of the Pirate King.',
'anime'
,'../assests/cont_assests/one_piece_img.jpg'
,'https://gogoanimeapp.com/category/one-piece'
,'one , piece , one piece , big three , luffy',1015),
('SpyxFamily',
'For the agent known as "Twilight," no order is too tall if it is for the sake of peace. Operating as Westalis master spy, Twilight works tirelessly to prevent extremists from sparking a war with neighboring country Ostania. For his latest mission, he must investigate Ostanian politician, Donovan Desmond, by infiltrating his son s school: the prestigious Eden Academy. Thus, the agent faces the most difficult task of his career: get married, have a child, and play family.',
'anime',
'../assests/cont_assests/spyxfamily.jpg',
'https://gogoanimeapp.com/category/spy-x-family',
'spy,spyxfamily',12),
('Kagura-sama:Love is War',
'Considered a genius due to having the highest grades in the country, Miyuki Shirogane leads the prestigious Shuchiin Academy s student council as its president, working alongside the beautiful and wealthy vice president Kaguya Shinomiya. The two are often regarded as the perfect couple by students despite them not being in any sort of romantic relationship.',
'anime',
'../assests/cont_assests/loveiswar.jpg',
'https://gogoanimeapp.com/category/kaguya-sama-wa-kokurasetai-tensai-tachi-no-renai-zunousen',
'love,war,kaguya-sama,kaguya sama,love is war',12),
('One Punchman',
'The seemingly unimpressive Saitama has a rather unique hobby: being a hero. In order to pursue his childhood dream, Saitama relentlessly trained for three years, losing all of his hair in the process. Now, Saitama is so powerful, he can defeat any enemy with just one punch. However, having no one capable of matching his strength has led Saitama to an unexpected problem—he is no longer able to enjoy the thrill of battling and has become quite bored.',
'anime',
'../assests/cont_assests/onepunch.jpg',
'https://gogoanimeapp.com/category/one-punch-man',
'one,punch,one punchman',12),
('DBZ : Super',
'Seven years after the events of Dragon Ball Z, Earth is at peace, and its people live free from any dangers lurking in the universe. However, this peace is short-lived; a sleeping evil awakens in the dark reaches of the galaxy: Beerus, the ruthless God of Destruction',
'anime',
'../assests/cont_assests/dbzsuper.jpg',
'https://gogoanimeapp.com/category/dragon-ball-super',
'dragon, ball,super,dragon ball, dragon ball super',131);