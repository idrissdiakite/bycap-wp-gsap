![Screenshot](screenshot.png)

## 📍 Contexte

Thème wordpress sur-mesure.  
Premier site développé au sein de l'agence Digital Cover (2023).

À partir d'une maquette (Figma) réalisée par le directeur artistique, j'ai été en charge de tout le reste: mise en place du back-office (wordpress), intégration de la maquette, développement, recettage, animations, mises en ligne (preprod et prod) etc...

## ⚙ Stack(s)

**Développement**
- Sage / Laravel Blade (PHP templating)
- Bootstrap (grid system - container/row/col)
- Javascript (ES6)
- Scss (méthode bem)
- Webpack
- Wordpress (ACF + CPT UI)
- Gitlab + FileZila + SSH + OVH

**Librairies**
- Lenis
- Taxi
- Gsap
- Splitting

## 🚦 Showcase

Exemples de blocks/composants/animations entièrement développés par mes soins:

## [Tombstones (flip cards)](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/tombstones)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/tombstones/screenshot.png)

**Description** 

Animation expressement demandée par le client: lorsqu'on survole une card, celle ci rotate sur elle même afin d'afficher son coté "verso". 
Pour cela, j'ai créé une card composée de deux divs: une pour le front, une pour le back à laquelle j'ai appliqué un *rotateY(180deg)*. L'astuce pour obtenir l'animation souhaitée a été d'appliquer la propriété **backface-visibility: hidden** à la card. Coté js, j'ai simplement ajouté une fonction afin de toggle la classe **show-back** lorsqu'on clique sur card (uniquement sur mobile & tablette).

<a href="https://www.youtube.com/watch?v=IBsneJmI-bw" target="_blank">demo</a>

## [Équipe (modal + slider)](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/team-members)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/team-members/screenshot.png)

**Description** 

<a href="https://www.youtube.com/watch?v=n8dcZ58DhBM" target="_blank">demo</a>


## [Scroll horizontal](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/horizontal-scroll)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/horizontal-scroll/screenshot.png)

**Description** 


<a href="https://www.youtube.com/watch?v=Ih7O6hxIVHA" target="_blank">demo</a>



## [Chiffre clé](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/key-figure)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/key-figure/screenshot.png)

**Description** 


## 💫 Live

[https://by-cap.com/](https://by-cap.com/)
