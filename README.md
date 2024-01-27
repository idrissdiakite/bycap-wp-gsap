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

Présentation de l'équipe de Bycap sous forme de grille d'images. Lorsqu'on clique sur un collaborateur cela ouvre une modale avec à gauche la photo de ce dernier et à droite différentes informations à son sujet. La modale intègre un slider, en effet il est également possible d'afficher le collaborateur précédent/suivant lorsqu'on clique sur les flèches. Une fois ouverte, la modale (cf. **.s-team*) prend la quasi intégralité de la fenêtre avec un léger filtre sur l'arrière plan pour un meilleur rendu, grâce à la propriété css **background-color: rgba(black, 0.8)**; 

La difficulté du bloc, au delà de trouver le bon timing/enchainement pour l'apparition et les changements de slide (animation réalisée avec Gsap), aura été de trouver un moyen de bloquer le scroll lorsque la modale est ouverte tout en permettant le scroll à l'intérieur de la modale. Ayant utiliser la librairie Lenis (pour le smooth scroll) sur le projet, celle ci créait un conflit et rendait le scroll dans la modale impossible, pour contourner cela j'ai du ajouter la fonction **onwheel="event.stopPropagation()** au component **slider-team** ainsi que la propriété css **overflow: auto** au bon endroit (cf. **s-team__wrapper**).

<a href="https://www.youtube.com/watch?v=n8dcZ58DhBM" target="_blank">demo</a>


## [Scroll horizontal](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/horizontal-scroll)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/horizontal-scroll/screenshot.png)

**Description** 

Bloc permettant d'afficher plusieurs cards. Une fois sur la section, le scroll vertical se transform en scroll horizontal afin de faire apparaitre les cards initialement caché sur la droite grace aux propriétés css **flex**, **flex-wrap: nowrap** et **overflow-x: scroll** puis en js en appliquant un **transform: translate3d** sur le wrapper.

<a href="https://www.youtube.com/watch?v=Ih7O6hxIVHA" target="_blank">demo</a>



## [Chiffre clé](https://github.com/idrissdiakite/bycap-wp-gsap/tree/main/key-figure)

![Screenshot](https://github.com/idrissdiakite/bycap-wp-gsap/blob/main/key-figure/screenshot.png)

**Description** 

Bloc en 2 colonnes, à gauche une image et à droite du contenu. À cheval sur l'image, on affiche une date clé avec un effet de couleur sur la date: blanc si c'est dans l'image, bleu si c'est en dehors. Effet réalisé uniquement en css.

## 💫 Live

[https://by-cap.com/](https://by-cap.com/)
