<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Contact;

class ContactControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_can_list_contacts()
    {
        // Create some contacts
        Contact::factory()->create(['first_name' => 'Christos']);
        Contact::factory()->create(['first_name' => 'Andreas']);

        // Make a GET request to the contacts index
        $response = $this->get(route('contacts.index'));

        // Assert that the response is successful and contains the created contacts
        $response->assertStatus(200);
        $response->assertSee('Christos');
        $response->assertSee('Andreas');
    }

    /** @test */
    public function it_can_create_a_contact()
    {
        // Make a POST request to create a new contact
        $response = $this->post(route('contacts.store'), [
            'first_name' => 'Christos',
            'last_name' => 'Christodoulou',
            'phone' => '1234567890',
            'description' => 'Junior Developer',
        ]);

        // Assert that the response status is 302 (redirect)
        $response->assertStatus(302);

        // Assert that the contact was created in the database
        $this->assertDatabaseHas('contacts', [
            'first_name' => 'Christos',
            'last_name' => 'Christodoulou',
        ]);
    }

    /** @test */
    public function it_can_update_a_contact()
    {
        // Create a contact
        $contact = Contact::factory()->create([
            'first_name' => 'Christos',
            'last_name' => 'Christodoulou',
        ]);

        // Make a PUT request to update the contact
        $response = $this->put(route('contacts.update', $contact->id), [
            'first_name' => 'Andreas',
            'last_name' => 'Christodoulou',
            'phone' => '1234567890',
            'description' => 'Updated test contact',
        ]);

        // Assert that the response status is 302 (redirect)
        $response->assertStatus(302);

        // Assert that the contact was updated in the database
        $this->assertDatabaseHas('contacts', [
            'first_name' => 'Andreas',
            'last_name' => 'Christodoulou',
        ]);
    }

    /** @test */
    public function it_can_delete_a_contact()
    {
        // Create a contact
        $contact = Contact::factory()->create([
            'first_name' => 'Christos',
            'last_name' => 'Christodoulou',
        ]);

        // Make a DELETE request to delete the contact
        $response = $this->delete(route('contacts.destroy', $contact->id));

        // Assert that the response status is 302 (redirect)
        $response->assertStatus(302);

        // Assert that the contact was deleted from the database
        $this->assertDatabaseMissing('contacts', [
            'id' => $contact->id,
        ]);
    }
}
