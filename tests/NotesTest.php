<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Note;

class NotesTest extends TestCase
{
    
    //Use WithoutMiddleware;
    
    public function test_notes_list()
    {
    	
        $this->visit('notes')
        	// then
        	->click('Add a Note')
            ->seePageIs('notes/create')
            ->see('Create a Note')
            ->type('A New Note','note')
            ->press('Create Note')
            ->seePageIs('notes')
            ->see('A New Note')
            ->seeInDatabase('notes', [
                'note'=>'A new note'
                ]);
    }

}
