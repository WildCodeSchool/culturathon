<?php
/**
 * Created by PhpStorm.
 * User: gollum
 * Date: 14/06/18
 * Time: 16:54
 */

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Artwork;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ArtworkFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $artwork = new Artwork();
        $artwork->setName('L’Embarquement des animaux dans l’arche de Noé');
        $artwork->setDate(new \DateTime('1615'));
        $artwork->setTechnique('Huile sur bois');
        $artwork->setDescription('Ce tableau est l’une des versions d’une composition à succès peinte par Jan Brueghel le Jeune entre 1613 et 1615. Le peintre s’inspire d’une œuvre élaborée par son père. Jan Brueghel l’Ancien (dit Brueghel de Velours) vers 1610 et il n’est d’ailleurs pas interdit de voir dans le petit tableau d’Orléans une œuvre de collaboration entre le père et le fils. Le thème des animaux réunis par Noé dans l’arche à été traité à de nombreuses reprises par l’atelier des Brueghel. La version d’Orléans est elle-même connue par des répliques, attestant de sa grande popularité. 

Son sujet, emprunté à un chapitre de la Genèse, offre le prétexte à un déploiement presque encyclopédique d’espèces animales, européennes ou exotiques, domestiques ou sauvages, faisant de ces petits panneaux de cabinets autant de charmants bestiaires vivement colorés. Ce type de composition pouvait prendre place dans un cabinet de curiosité, où le collectionneur du XVIIᵉ siècle rassemblait objets scientifiques et naturalia, coquillages, animaux naturalisés, cornes, trophées de chasse, coraux, fossiles. Le peintre nous transporte dans les jours précédents le Déluge : Dieu à décidé de punir les hommes en noyant la Terre. Il demande à Noé et à sa famille de bâtir une arche afin d’abriter des couples d’animaux et ainsi repeupler la Terre après la décrue. Devant le spectateur, le peintre aligne une somme considérable d’espèces : lions, chiens, léopards, tortues, porcs épics, bœufs, éléphants, singes, dromadaires, divers rongeurs et de grandes volées d’oiseaux.  Un grand cheval blanc, isolé, servant de point d’appui à la composition, emprunte sa pose majestueuse à certains tableaux de Rubens, dont Brueghel était l’ami proche.
');
        $artwork->setImage('/images/Brueghel.MNR 421.jpg');

        $manager->persist($artwork);

        $artwork = new Artwork();
        $artwork->setName('Episode de la campagne d’Egypte – Bataille d’Héliopolis le 20 mars 1800');
        $artwork->setDate(new \DateTime('1615'));
        $artwork->setTechnique('Huile sur toile');
        $artwork->setDescription('Léon Cogniet a largement contribué au musée d’Histoire de France fondé à Versailles par Louis-Philippe, avec notamment les commandes de La Bataille du Thabor (aujourd’hui déposé à Orléans) et La bataille d’Héliopolis, toujours à Versailles. 
Ce tableau reprend le même sujet dans un format plus réduit destiné au marché de l’art, particulièrement actif sous la Monarchie de Juillet. 
');
        $artwork->setImage('/images/Cogniet.jpg');

        $manager->persist($artwork);

        $artwork = new Artwork();
        $artwork->setName('Tête de vieille femme');
        $artwork->setTechnique('Huile sur toile');
        $artwork->setDescription('En 1824, Delacroix expose au Salon Scène de massacres de Scio qui rend hommage à la résistance et au courage du peuple grec révolté contre la domination turque. Cette étude prépare la tête de vielle femme à droite de la composition. Léon Cogniet, rendant visite à Delacroix en mai 1824, lors de l’exécution de l’œuvre, admira beaucoup ce personnage qu’il rapprocha de toiles de leur ami commun, Géricault, récemment disparu. ');
        $artwork->setImage('/images/Delacroix.jpg');

        $manager->persist($artwork);

        $artwork = new Artwork();
        $artwork->setName('La Vierge à l’Enfant avec saint Jean Baptiste et saint Joseph');
        $artwork->setTechnique('Huile sur bois');
        $artwork->setDescription('En 1824, Delacroix expose au Salon Scène de massacres de Scio qui rend hommage à la résistance et au courage du peuple grec révolté contre la domination turque. Cette étude prépare la tête de vielle femme à droite de la composition. Léon Cogniet, rendant visite à Delacroix en mai 1824, lors de l’exécution de l’œuvre, admira beaucoup ce personnage qu’il rapprocha de toiles de leur ami commun, Géricault, récemment disparu. ');
        $artwork->setImage('/images/Delacroix.jpg');

        $manager->persist($artwork);

        $manager->flush();

        $this->addReference('artwork', $artwork);
    }
}