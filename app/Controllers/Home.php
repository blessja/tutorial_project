<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('tutorial');
    }

    public function getTutorialData() {
        // Dummy data (replace with your actual data fetching logic)
        log_message('debug', 'getTutorialData method called.');
        $tutorialData = [
            'title' => 'Introduction to HTML2',
            'title_2' => 'HTML Images',
            'description' => 'Images can improve the design and the appearance of a web page.',
            
            // Add more data as needed
        ];

        // Return JSON response
        return $this->response
            ->setStatusCode(200)
            ->setContentType('application/json')
            ->setJSON($tutorialData);
    }
}