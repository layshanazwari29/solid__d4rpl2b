<?php

namespace socialmedia;

require_once '../../lsp/studi1/socialmedia.php';
require_once '../../lsp/studi1/videogroupmanager.php';

class WhatsApp implements \SocialMedia, \VideoGroupManager
{
    public function chat(): void
    {
        echo "Chatting on WhatsApp...\n";
    }

    public function sendPhotosAndVideos(): void
    {
        echo "Sending photos and videos on WhatsApp...\n";
    }

    public function callGroupVideo(): void
    {
        echo "Calling group video on WhatsApp...\n";
    }
}
