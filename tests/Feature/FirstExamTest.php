<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstExamTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_page_loaded()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_index_page_view_verify()
    {
        $response = $this->get('/');
        $response->assertViewIs('index');
    }

    public function test_index_page_text()
    {
        $response = $this->get('/');
        $response->assertSee('Index Page');

        $this->assertStringContainsString('href="/"', $response->getContent());
        $this->assertStringContainsString('href="/aboutus"', $response->getContent());
        $this->assertStringContainsString('href="/contactus"', $response->getContent());
    }

    public function test_about_page_loaded()
    {
        $response = $this->get('/aboutus');
        $response->assertStatus(200);
    }

    public function test_about_page_view_verify()
    {
        $response = $this->get('/aboutus');
        $response->assertViewIs('aboutus');
    }

    public function test_about_page_text()
    {
        $response = $this->get('/aboutus');
        $response->assertSee('About Us Page');

        $this->assertStringContainsString('href="/"', $response->getContent());
        $this->assertStringContainsString('href="/aboutus"', $response->getContent());
        $this->assertStringContainsString('href="/contactus"', $response->getContent());
    }

    public function test_contact_page_loaded()
    {
        $response = $this->get('/contactus');
        $response->assertStatus(200);
    }

    public function test_contact_page_view_verify()
    {
        $response = $this->get('/contactus');
        $response->assertViewIs('contactus');
    }

    public function test_contact_page_text()
    {
        $response = $this->get('/contactus');
        $response->assertSee('Contact Us Page');

        $this->assertStringContainsString('href="/"', $response->getContent());
        $this->assertStringContainsString('href="/aboutus"', $response->getContent());
        $this->assertStringContainsString('href="/contactus"', $response->getContent());
    }

    public function test_fields_on_contact_us_form()
    {
        $response = $this->get('/contactus');
        $this->assertStringContainsString('name="_token"',$response->getContent());
        $this->assertStringContainsString('type="submit"',$response->getContent());
        $this->assertStringContainsString('type="reset"',$response->getContent());
    }

    public function test_contact_form_submit()
    {
        $data = [
            'name' => 'User name',
            'email' => 'user@email.com',
            'phone' => '9876543210',
            'message' => 'This is test message',
        ];

        $response = $this->post('/contact_submit', $data);
        $response->assertStatus(200);
        $response->assertSeeText('This is test message');

    }
}
