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
	'ACP_SPAMREMOVER_AKISMET_KEY'				=> 'Clé API Akismet',
	'ACP_SPAMREMOVER_AKISMET_KEY_EXPLAIN'		=> 'Saisissez la clé API acquise auprès d‘Askimet dans ce champ. Il doit contenir exactement 12 caractères. La clé doit être valide pour que cette extension trouve le spam. Pour obtenir une clé, utilisez le lien dans la légende ci-dessus.',
	'ACP_SPAMREMOVER_AKISMET_KEY_INVALID'		=> 'Votre clé Akismet n‘est pas valide. Il doit comporter 12 caractères. Utilisez le lien ci-dessous pour acquérir une clé.',
	'ACP_SPAMREMOVER_AKISMET_KEY_INVALID_SCANNER'	=> 'Votre clé Akismet n‘est pas valide. Il doit comporter 12 caractères. Entrez la clé sur la page des paramètres de l‘extension.',
	'ACP_SPAMREMOVER_AKISMET_RESULT'			=> 'Type de spam',
	'ACP_SPAMREMOVER_ALL'						=> 'Tous',
	'ACP_SPAMREMOVER_ALL_PMS_CHECKED'			=> 'Tous les messages privés répondant à vos critères ont été vérifiés pour le spam. Au total, %s des %s messages privés ont été identifiés comme spam.',
	'ACP_SPAMREMOVER_ALL_POSTS_CHECKED'			=> 'Tous les messages répondant à vos critères ont été vérifiés pour le spam. Un total de %s des %s messages vérifiés ont été signalés comme spam.',
	'ACP_SPAMREMOVER_AUTHOR'					=> 'Auteur',
	'ACP_SPAMREMOVER_ARE_YOU_SURE'				=> 'Etes-vous sur de vouloir continuer ? Cette action ne peut pas être annulée !',
	'ACP_SPAMREMOVER_BATCH_SIZE'				=> 'Taille du lot',
	'ACP_SPAMREMOVER_BATCH_SIZE_EXPLAIN'		=> 'Le nombre de publications ou de messages privés qui seront vérifiés par Akismet avant le rafraîchissement de l‘écran. Si vous définissez un nombre trop élevé, vous risquez de rencontrer un délai d‘expiration de la passerelle et d‘autres erreurs de ressources HTTP, PHP ou de base de données.',
	'ACP_SPAMREMOVER_BLATANT_SPAM'				=> 'Spam flagrant',
	'ACP_SPAMREMOVER_BOARD_ORDER'				=> 'Ordre du forum (comme sur l‘index et la page du sujet)',
	'ACP_SPAMREMOVER_DATE_FORMAT'				=> 'AAAA-MM-JJ',
	'ACP_SPAMREMOVER_FIND_ALL_PMS'				=> 'Rechercher les messages privés déjà vérifiés ?',
	'ACP_SPAMREMOVER_FIND_ALL_PMS_EXPLAIN'		=> 'Si les messages privés de spam ont été vérifiés dans le passé, définir ce paramètre sur Oui forcera une nouvelle vérification dans la base de données d‘Akismet de tous les messages privés qui répondent à vos critères de date. Si Non, les messages privés déjà vérifiés seront ignorés. Il est possible, mais peu probable, que les jugements d‘Akismet changent avec le temps.',
	'ACP_SPAMREMOVER_FIND_ALL_POSTS'			=> 'Rechercher des messages déjà vérifiés ?',
	'ACP_SPAMREMOVER_FIND_ALL_POSTS_EXPLAIN'	=> 'Si les messages de spam ont été vérifiés dans le passé, définir ce paramètre sur Oui forcera une nouvelle vérification dans la base de données d‘Akismet de tous les messages qui répondent à vos critères de date. Si Non, les messages déjà vérifiés seront ignorés. Il est possible, mais peu probable, que les jugements d‘Akismet changent avec le temps.',
	'ACP_SPAMREMOVER_GENERAL_SETTINGS'			=> 'Réglages généraux',
	'ACP_SPAMREMOVER_GUIDANCE'					=>
'<h2>Approche recommandée</h2>
<ul>
<li>En mode test, rien ne sera supprimé et Akismet ne prendra aucune mesure en fonction des informations qui lui sont envoyées. <strong>Restez en mode test jusqu‘à ce que vous soyez prêt à supprimer le spam pour de vrai.</strong></li>
<li>Voyez si vous pouvez déterminer quand le spam a commencé. Si vous le pouvez, définissez une plage de dates à partir de cette date.</li>
<li>Après avoir défini une plage de dates appropriée, essayez d‘exécuter un résumé de spam à partir de cette date. <strong>Essayer de vérifier chaque message sur votre tableau est susceptible d‘échouer car il pourrait envoyer des milliers de messages à Akismet. À moins que votre carte ne soit petite, cela risque de provoquer une erreur de temporisation et le processus peut sembler se bloquer.</strong> Appuyez sur le bouton Retour de votre navigateur si une erreur se produit. Il peut y avoir des informations supplémentaires dans le journal d‘erreurs de phpBB ou votre journal d‘erreurs PHP.</li>
<li>S‘il y a eu une erreur de délai d‘attente, essayez de réduire la plage de dates jusqu‘à ce que les problèmes de délai d‘attente ne se produisent plus. Cela vous donnera une idée d‘une plage de dates qui fonctionnera de manière fiable.</li>
</ul>
<h2>Préparation recommandée</h2>
<ul>
<li>Désactivez votre forum avant de supprimer les spams et activez-le ensuite. La recherche et la suppression du spam peuvent prendre beaucoup de temps, de sorte que les utilisateurs peuvent remarquer des problèmes et des incohérences si vous ne le faites pas..</li>
<li>Ensuite, effectuez une sauvegarde complète de votre base de données et soyez prêt à la récupérer en cas d‘erreur. Vérifiez manuellement que vous disposez d‘une sauvegarde complète avant de supprimer tout spam. Le fichier .sql doit afficher SQL et le dernier caractère du fichier doit être un point-virgule. Assurez-vous de bien connaître les procédures de récupération de la base de données en cas d‘erreurs inattendues. Dans le cas de bases de données volumineuses, il peut être nécessaire de les récupérer en dehors de phpBB.</li>
<li>Vous devez également sauvegarder le dossier des fichiers de votre forum. Les pièces jointes supprimées ne peuvent pas être récupérées autrement.</li>
</ul>
<h2>Supprimer le spam</h2>
<ul>
<li><strong>Avertissement !</strong> Si le premier message d‘un sujet est marqué comme spam, l‘ensemble du sujet et toutes ses réponses seront également supprimés.</li>
<li><strong>Attention !</strong> Si après la suppression du spam, le nombre de messages de l‘utilisateur est de zéro (0), son compte sera également supprimé. (Les administrateurs et les modérateurs globaux ne sont pas concernés.)</li>
<li><strong>Avertissement !</strong> Si vous choisissez de supprimer tous les spams, vous ne pouvez pas signaler les faux positifs. Tout ce qu‘Akismet identifie comme spam flagrant sera supprimé. Le spam régulier sera également supprimé si ce paramètre est activé. Vous n‘obtiendrez pas de rapport détaillé du contenu supprimé avant la suppression. <strong>Cette approche n‘est pas recommandée.</strong></li>
<li>Essayez d‘abord de générer un rapport sur les détails du spam. Cela affichera le spam trouvé pour la plage de dates. Notez la prévalence de tous les faux positifs grâce à plusieurs tests sur la plage de dates du spam suspecté. Seuls les messages ou messages privés qu‘Akismet considère comme du spam sont affichés. Si un rapport est vide, aucun spam n‘a été détecté pour la plage de dates demandée.</li>
<li>Lorsque vous êtes prêt à supprimer le spam, désactivez le mode test.</li>
<li>Exécutez à nouveau le rapport sur les détails du spam. Marquez tous les faux positifs. Ceux-ci seront signalés comme bon à Akismet pour améliorer leur base de données. <strong>Lorsque vous soumettez le formulaire, les publications et messages privés non marqués seront supprimés.</strong></li>
<li>Sélectionnez des plages de dates supplémentaires si nécessaire et répétez. Lorsque le rapport récapitulatif sur les spams n‘indique aucun spam trouvé pour toutes vos plages de dates, vous devriez avoir terminé.</li>
<li>Ensuite, réactivez le forum et vérifiez qu‘il fonctionne correctement et que le spam a été supprimé.</li>
</ul>',
	'ACP_SPAMREMOVER_HAM'						=> 'Bon',
	'ACP_SPAMREMOVER_HAM_PMS_REPORTED'			=> 'Vos messages privés marqués ont été signalés à Akismet comme bon',
	'ACP_SPAMREMOVER_HAM_POSTS_REPORTED'		=> 'Vos messages marqués ont été signalés à Akismet comme bon',
	'ACP_SPAMREMOVER_INSTALL_REQUIREMENTS'		=> 'Cette extension fonctionne uniquement avec la version 3.3 de phpBB. Pour communiquer avec Akismet, cette extension nécessite également l‘extension PHP sockets.',
	'ACP_SPAMREMOVER_IS_FIRST_POST'				=> 'Premier message dans le sujet',
	'ACP_SPAMREMOVER_ITEMS_PER_PAGE'			=> 'objets par page',
	'ACP_SPAMREMOVER_ITEMS_PER_PAGE_EXPLAIN'	=> 'Définit le nombre maximum de publications ou de messages privés qui apparaîtront dans un rapport de détails sur les publications de spam ou les messages privés de spam.',
	'ACP_SPAMREMOVER_MARK'						=> 'Signaler comme non spam (bon)',
	'ACP_SPAMREMOVER_MSG_ID'					=> 'ID du message',
	'ACP_SPAMREMOVER_MSG_TEXT'					=> 'Texte du message (mise en forme supprimée)',
	'ACP_SPAMREMOVER_MSG_TIME'					=> 'Date/heure du message',
	'ACP_SPAMREMOVER_NO_ITEMS_FOUND'			=> 'Aucune action prise en compte car vos paramètres indiquent de ne vérifier ni les publications ni les messages privés.',
	'ACP_SPAMREMOVER_NO_SPAM_ERASED'			=> 'Aucun spam n‘a été effacé.',
	'ACP_SPAMREMOVER_NO_SPAM_REMOVED'			=> 'Aucun spam n‘a été supprimé car vous n‘avez pas activé cette option.',
	'ACP_SPAMREMOVER_PARTIAL_PMS_CHECKED'		=> 'Un total de %u messages privés de spam ont été trouvés jusqu‘à présent. %u messages privés ont été vérifiés. Il reste %u messages privés à vérifier. Vous avez %s%% terminé cette étape.',
	'ACP_SPAMREMOVER_PARTIAL_POSTS_CHECKED'		=> 'Un total de %u messages de spam ont été trouvés jusqu‘à présent. %u messages ont été vérifiés. Il reste %u messages à vérifier. Vous avez %s%% terminé cette étape.',
	'ACP_SPAMREMOVER_PERMANENTLY_REMOVE'		=> 'Voulez-vous vraiment supprimer <em>définitivement</em> tous les éléments marqués comme spam ?',
	'ACP_SPAMREMOVER_PERMANENTLY_REMOVE_EXPLAIN'	=> 'Vous devez sélectionner Oui, puis appuyer sur Soumettre pour supprimer le spam. Il n‘y pas de retour en arriere ! Vous devriez d‘abord sauvegarder votre base de données dans l‘onglet maintenance.',
	'ACP_SPAMREMOVER_PMS'						=> 'Rechercher des spams dans les messages privés ?',
	'ACP_SPAMREMOVER_PMS_DATE'					=> 'Plage de dates des messages privés',
	'ACP_SPAMREMOVER_PMS_DATE_EXPLAIN'			=> 'Laissez vide pour analyser tous les messages privés. Pour sélectionner une date, utilisez le champ sélecteur de date.',
	'ACP_SPAMREMOVER_PMS_END_DATE'				=> 'Fin de la plage de dates des messages privés',
	'ACP_SPAMREMOVER_PMS_END_DATE_EXPLAIN'		=> 'Laissez vide pour parcourir le dernier message privé. Pour sélectionner une date, utilisez le champ sélecteur de date.',
	'ACP_SPAMREMOVER_PMS_SETTINGS'				=> 'Paramètres de messagerie privée',
	'ACP_SPAMREMOVER_PMS_START_DATE'			=> 'Début de la plage de dates des messages privés',
	'ACP_SPAMREMOVER_PMS_START_DATE_EXPLAIN'	=> 'Laissez vide pour lancer la numérisation à partir du premier message privé. Pour sélectionner une date, utilisez le champ sélecteur de date.',
	'ACP_SPAMREMOVER_POST_ID'					=> 'ID de publication',
	'ACP_SPAMREMOVER_POST_SETTINGS'				=> 'Paramètres de publication',
	'ACP_SPAMREMOVER_POST_TEXT'					=> 'Contenu de la publication (mise en forme supprimée)',
	'ACP_SPAMREMOVER_POST_TIME'					=> 'Date/heure de publication',
	'ACP_SPAMREMOVER_POSTER'					=> 'Affiche',
	'ACP_SPAMREMOVER_POSTS'						=> 'Rechercher des messages pour le spam ?',
	'ACP_SPAMREMOVER_POSTS_END_DATE'			=> 'Fin de la plage de dates des publications',
	'ACP_SPAMREMOVER_POSTS_END_DATE_EXPLAIN'	=> 'Laissez vide pour parcourir le dernier message. Pour sélectionner une date, utilisez le champ sélecteur de date.',
	'ACP_SPAMREMOVER_POSTS_START_DATE'			=> 'Début de la plage de dates des publications',
	'ACP_SPAMREMOVER_POSTS_START_DATE_EXPLAIN'	=> 'Laissez vide pour commencer à numériser à partir du premier message. Pour sélectionner une date, utilisez le champ sélecteur de date.',
	'ACP_SPAMREMOVER_REMOVE_ONLY_BLATANT_SPAM'	=> 'Supprimer uniquement le spam flagrant ?',
	'ACP_SPAMREMOVER_REMOVE_ONLY_BLATANT_SPAM_EXPLAIN'	=> 'Akismet définit le spam flagrant comme un spam qui est définitivement du spam. Ce paramètre supprimera uniquement le spam flagrant, laissant les éléments marqués comme spam probable intacts.',
	'ACP_SPAMREMOVER_REMOVE_SPAM'				=> 'Supprimer tous les spams répondant à vos critères (aucun détail ne sera fourni et vous ne pourrez pas signaler les faux positifs.)',
	'ACP_SPAMREMOVER_REMOVE_SPAM_BUTTON'		=> 'Supprimer les spams',
	'ACP_SPAMREMOVER_SET_SEARCH_CRITERIA'		=> 'Définir les critères de recherche',
	'ACP_SPAMREMOVER_SETTING_SAVED'				=> 'Les paramètres ont été enregistrés avec succès !',
	'ACP_SPAMREMOVER_SHOW'						=> 'Type de spam à afficher',
	'ACP_SPAMREMOVER_SORT_BY'					=> 'Trier par',
	'ACP_SPAMREMOVER_SORT_ORDER'				=> 'Ordre de tri',
	'ACP_SPAMREMOVER_SPAM'						=> 'Spam probable',
	'ACP_SPAMREMOVER_SPAM_ERASED'				=> 'Les données de spam ont été effacées.',
	'ACP_SPAMREMOVER_SPAM_MESSAGES'				=> 'Messages privés indésirables trouvés',
	'ACP_SPAMREMOVER_SPAM_POSTS'				=> 'Messages indésirables trouvés',
	'ACP_SPAMREMOVER_SPAM_REMOVED'				=> 'Le spam a été supprimé. Un total de %u messages, %u sujets, %u utilisateurs et %u messages privés ont été supprimés.',
	'ACP_SPAMREMOVER_SPAM_SUMMARY'				=> 'Résumé des spams',
	'ACP_SPAMREMOVER_SPAM_TYPE'					=> 'Type de courrier indésirable',
	'ACP_SPAMREMOVER_TEST_MODE'					=> 'Mode test',
	'ACP_SPAMREMOVER_TEST_MODE_EXPLAIN'			=> 'Lorsqu‘il est défini sur Oui, le spam signalé n‘est pas réellement supprimé de votre forum et Akismet est averti de ne pas modifier sa base de données de spam si vous avez signalé un message ou un message privé comme bon. Aucun message, message privé, sujet ou utilisateur n‘est supprimé. Assurez-vous de définir ce paramètre sur Non avant de supprimer en bloc le spam.',
	'ACP_SPAMREMOVER_TEST_MODE_IMPLICATIONS'	=> 'Puisque vous êtes en mode test, si vous appuyez sur Soumettre, aucun spam ne sera réellement supprimé. Sélectionnez l‘option sur la page Paramètres pour sortir du mode test.',
	'ACP_SPAMREMOVER_TOPIC_REPLIES'				=> 'Réponses au sujet',
));
