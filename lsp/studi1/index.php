<?php

require_once '../../lsp/studi1/whatsapp.php';
require_once '../../lsp/studi1/instagram.php';

use SocialMedia\WhatsApp;
use SocialMedia\Instagram;

// Create instances of WhatsApp and Instagram
$whatsapp = new WhatsApp();
$instagram = new Instagram();

// Use WhatsApp
echo "WhatsApp Actions:\n";
$whatsapp->chat();
$whatsapp->sendPhotosAndVideos();
$whatsapp->callGroupVideo();

// Use Instagram
echo "\nInstagram Actions:\n";
$instagram->chat();
$instagram->sendPhotosAndVideos();
$instagram->publishPost();

?>
