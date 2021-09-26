<?php
/**
 *
 * Spam Remover [French]
 * 
 * Spam remover. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2021, MarkDHamill, https://www.phpbbservices.com/
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_SPAMREMOVER_BULK_REMOVE_SPAM'				=> 'Suppression des spams en masse',
	'ACP_SPAMREMOVER_BULK_REMOVE_SPAM_EXPLAIN'		=> 'Cette fonction supprime tous les spams trouvés dans les publications et les messages privés en fonction des critères de recherche que vous avez définis.<br><br>Avant d‘exécuter cette opération, vous devez exécuter les rapports détaillés pour les publications et les messages privés et signaler de manière sélective tout contenu qui n‘est pas du spam . Il est également <strong>fortement recommandé</strong> de sauvegarder complètement votre base de données avant d‘exécuter ce programme, car il peut apporter des modifications <em>massives</em> à votre base de données qui ne peuvent pas être récupérées autrement, en supprimant non seulement les messages et des messages privés, mais dans certains cas, des sujets et des utilisateurs entiers. Vous pouvez sauvegarder votre base de données dans l‘onglet maintenance.<br><br>Sur les forums avec de grandes quantités de spam, vous pouvez rencontrer des erreurs généralement dues à la taille du contenu à supprimer et aux limitations de ressources imposées par votre hébergement Web. Si cela se produit, vous pouvez l‘exécuter à plusieurs reprises pour supprimer tout spam restant. Vous devrez peut-être attendre un certain temps jusqu‘à ce que les ressources de la base de données soient réinitialisées. Cette extension utilise des transactions de base de données qui devraient garantir que votre base de données ne deviendra pas incohérente si cela se produit.<br><br><em>Veuillez noter :</em>',
	'ACP_SPAMREMOVER_BULK_REMOVE_SPAM_EXPLAIN_EXTRA'	=> '<ul><li>Il est fortement recommandé de désactiver votre forum avant de l‘exécuter. <strong>ACP > Paramètres du forum > Désactiver le forum > Oui</strong></li><li>Si le premier message d‘un sujet est marqué comme spam, son sujet et toutes ses réponses seront également supprimés.</li>
<li>Tous les posteurs de spam sans publication approuvée verront également leurs comptes supprimés.</li><li>Réactivez votre tableau une fois tous les spams supprimés. <strong>ACP > Paramètres du tableau > Désactiver le forum > Non</strong></li></ul>',
	'ACP_SPAMREMOVER_FIND_SPAM'						=> 'Spam trouvé',
	'ACP_SPAMREMOVER_FIND_SPAM_EXPLAIN'				=> 'Cette page trouve les courriers indésirables et les messages privés en envoyant des messages sélectionnés et des messages privés au service anti-spam d‘Akismet. Si vous savez quand le spam a commencé, regardez à partir de cette date car cela peut prendre beaucoup de temps (des heures dans certains cas, voire des jours) pour vérifier tous les messages et messages privés sur votre forum. La page peut se rafraîchir périodiquement avec une mise à jour de l‘état de la vérification anti-spam. Au fur et à mesure que le contenu est vérifié, un résumé en cours montrera la progression. Les publications sont vérifiées avant les messages privés.<br><br><strong>Akismet vérifiera environ 4 publications ou messages privés par seconde. Sur cette base, il faudrait environ %s:%s:%s (heures, minutes, secondes) pour vérifier tous vos messages et %s:%s:%s (heures, minutes, secondes) pour vérifier tous vos messages privés .</strong> Cela peut prendre beaucoup plus de temps en fonction de la vitesse et de la qualité de la connexion Internet de votre serveur et de la charge sur les serveurs d‘Akismet. Cliquez sur le lien dans n‘importe quelle boîte de dialogue suivante pour abandonner. Tout spam trouvé restera signalé. Pour réinitialiser les statistiques de spam, utilisez la fonction <strong>réinitialiser les données de spam</strong>.',
	'ACP_SPAMREMOVER_RESET'							=> 'Réinitialiser les données de spam',
	'ACP_SPAMREMOVER_RESET_EXPLAIN'					=> 'Décocher tous les messages et messages privés signalés comme spam, au cas où vous voudriez vous assurer d‘un nouvel ensemble de statistiques.',
	'ACP_SPAMREMOVER_SELECTIVELY_REMOVE_SPAM'		=> 'Supprimer sélectivement les spams',
	'ACP_SPAMREMOVER_SELECTIVELY_REMOVE_SPAM_EXPLAIN'	=> 'Cette page affiche les spams trouvés et vous permet de choisir de manière sélective les publications et messages privés à supprimer.',
	'ACP_SPAMREMOVER_SETTINGS'						=> 'Paramètres',
	'ACP_SPAMREMOVER_SETTINGS_EXPLAIN'				=> 'Cette extension supprime le spam des messages et des messages privés en appelant le service Web <a href="https://akismet.com">Akismet</a>, qui détermine sil sagit de spam ou non. Le sujet du message contenant du spam avec toutes ses réponses est supprimé s‘il s‘agit du premier message d‘un sujet. Le compte du spammeur est également supprimé sinon le spammeur n‘aurait pas de messages approuvés.<br><br>Vous devez d‘abord <a href="https://akismet.com/plans/">acquérir une clé API Akismet</a >, ce qui peut nécessiter des frais en fonction de votre utilisation du service. Vous pouvez être admissible à aucun frais si votre utilisation est pour un forum personnel. Si vous devez payer des frais mais que vous avez affaire à une suppression ponctuelle du spam, vous voudrez peut-être payer pour un mois seulement.<br><br><em>Remarque</em> : Si vous utilisez déjà le plugin Akismet sur votre site Wordpress, vous pouvez utiliser cette clé ci-dessous.<br><em>Remarque</em> : Il existe également une <a href="https://www.phpbb.com/customise/db/extension/akismet " target="_blank">Extension anti-spam Akismet</a> disponible qui peut être utilisée pour vérifier les nouveaux messages, inscriptions et formulaires via le service anti-spam Akismet. Si cette extension est installée, vous pouvez utiliser la même clé de licence que vous entrez ici.',
	'ACP_SPAMREMOVER_SETTINGS_EXPLAIN_EXTRA'		=> '<h2>Veuillez suivre ces procédures pour utiliser correctement cette extension :</h2><br>
<ol>
<li>Tout d‘abord, configurez correctement les paramètres de cette page.</li>
<li>Il est recommandé d‘activer le mode test et de le désactiver uniquement lorsque vous êtes prêt à supprimer les spams en masse.</li>
<li>Ensuite, utilisez la fonction <a href="%1$s">trouver le spam</a> pour localiser le spam dans les publications et les messages privés.</li>
<li>Ensuite, exécutez le <a href="%2$s">résumé de spam</a> pour avoir une idée de l‘étendue de votre problème de spam dans les types de contenu et les plages de dates que vous souhaitez vérifier. Notez que toutes les statistiques de spam afficheront zéro à moins que vous n‘exécutiez d‘abord la fonction <a href="%1$s">trouver le spam</a>.</li>
<li>Ensuite, utilisez le <a href="%3$s">rapport détaillé sur les messages indésirables</a> et le <a href="%4$s">rapport détaillé sur les messages privés indésirables</a> pour signaler tout élément incorrectement identifié pourriel. Assurez-vous d‘utiliser la fonction de pagination pour examiner tous les spams.</li>
<li>Ce n‘est qu‘après avoir terminé toutes ces étapes que vous devez exécuter la fonction de <a href="%5$s">suppression en masse du spam</a> pour supprimer définitivement tous les spams. Notez que vous pouvez choisir de supprimer uniquement le spam flagrant. Nous vous encourageons à sauvegarder complètement votre base de données en premier, car il n‘y a pas de fonction de récupération. Vous pouvez sauvegarder votre base de données depuis l‘onglet maintenance.</li>
</ol>',
	'ACP_SPAMREMOVER_SPAM_DETAIL_PMS'				=> 'Rapport détaillé de spam dans les messages privés',
	'ACP_SPAMREMOVER_SPAM_DETAIL_PMS_EXPLAIN'		=> 'Utilisez cette page pour examiner et signaler les messages privés signalés comme spam qui n‘en sont pas. Vous devez d‘abord exécuter la fonction <strong>trouver le spam</strong> pour que les éléments apparaissent ici.<br><br>Si vous faites confiance au signalement d‘Akismet du spam flagrant, vous pouvez filtrer les résultats pour n‘afficher que le spam probable. Lorsque vous signalez un message privé comme bon, Akismet sera averti pour améliorer la précision de son service, et ces messages privés ne seront pas supprimés.',
	'ACP_SPAMREMOVER_SPAM_DETAIL_POSTS'				=> 'Rapport détaillé sur le spam dans les messages',
	'ACP_SPAMREMOVER_SPAM_DETAIL_POSTS_EXPLAIN'		=> 'Utilisez cette page pour examiner et signaler les publications signalées comme spam qui n‘en sont pas. Vous devez d‘abord exécuter la fonction <strong>trouver le spam</strong> pour que les éléments apparaissent ici.<br><br>Si vous faites confiance au signalement d‘Akismet du spam flagrant, vous pouvez filtrer les résultats pour n‘afficher que le spam probable. Lorsque vous signalez une publication comme bon, Akismet sera averti pour améliorer la précision de son service, et ces publications ne seront pas supprimées.',
	'ACP_SPAMREMOVER_SPAM_SUMMARY'					=> 'Résumé des spams',
	'ACP_SPAMREMOVER_SPAM_SUMMARY_EXPLAIN'			=> '<strong>Vous devez d‘abord exécuter la fonction de recherche de spam pour obtenir des statistiques valides dans ce rapport, sinon le nombre de spams n‘affichera que des zéros.</strong> Ces statistiques peuvent ne pas être basées sur tous vos messages et messages privés, mais doivent inclure les plages de dates que vous avez sélectionnées sur la page de recherche de spam uniquement. <br><br>Akismet définit le spam flagrant comme un spam que vous pouvez éliminer en toute sécurité sans examen. Le contenu marqué comme spam probable doit être inspecté manuellement à l‘aide du rapport détaillé approprié et signalé s‘il ne s‘agit pas d‘un spam pour s‘assurer qu‘il n‘est pas supprimé lorsque vous exécutez la suppression de spam en masse..',
	'ACP_SPAMREMOVER_TITLE'							=> 'Suppression de spam',

	'LOG_ACP_SPAMREMOVER_BULK_REMOVE_RAN'			=> '<strong>La fonction de suppression de spam en bloc a été exécutée. Un total de %u messages, %u sujets, %u utilisateurs et %u messages privés ont été supprimés.</strong>',
	'LOG_ACP_SPAMREMOVER_FIND_SPAM_PMS_RAN'			=> '<strong>La fonction Rechercher le spam dans les messages privés a été exécutée</strong>',
	'LOG_ACP_SPAMREMOVER_FIND_SPAM_POSTS_RAN'		=> '<strong>La fonction Rechercher le spam dans les messages a été exécutée</strong>',
	'LOG_ACP_SPAMREMOVER_FIND_SPAM_SETTINGS_SAVED'	=> '<strong>Fparamètres ind spam mis à jour</strong>',
	'LOG_ACP_SPAMREMOVER_RESET'						=> '<strong>Toutes les données de spam ont été supprimées</strong>',
	'LOG_ACP_SPAMREMOVER_SETTINGS'					=> '<strong>Paramètres de suppression de spam mis à jour</strong>',
	'LOG_ACP_SPAMREMOVER_SPAM_PMS_DETAILS_RAN'		=> '<strong>La fonction de détails de spam dans les messages privés a été exécutée</strong>',
	'LOG_ACP_SPAMREMOVER_SPAM_POSTS_DETAILS_RAN'	=> '<strong>La fonction de détails de spam dans les messages a été exécutée</strong>',
));
