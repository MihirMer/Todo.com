<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }
    //
    public function index()
    {
        $notes = Note::orderby('priority')->orderby('deadline')->where('user_id', auth()->user()->id)->paginate(6);
        return view('notes.notes', [
            'notes'=>$notes
        ]);
    }

    public function showAddNote()
    {
        return view('notes.addNote');
    }
    public function showEditNote(Note $note)
    {
        return view('notes.editNote', ['note'=>$note]);
    }

    public function postNote(Request $request)
    {
        $this->validate($request, [
            'todo_title' => 'required|max:50',
            'todo_deadline' => 'required',
            'todo_category' => 'required',
            'todo_priority' => 'required',
            'todo_comment' => 'required|max:255'
        ]);

        $request->user()->posts()->create([
            'title' => $request->todo_title,
            'deadline' => $request->todo_deadline,
            'category' => $request->todo_category,
            'priority' => $request->todo_priority,
            'comment' => $request->todo_comment
        ]);
        return redirect('dashboard')->with('status','New Todo added.');
    }

    public function deleteNote(Note $note)
    {
        $note->delete();
        return back();
    }
    public function updateNote(Request $request)
    {
        $this->validate($request, [
            'todo_title' => 'required|max:50',
            'todo_deadline' => 'required',
            'todo_category' => 'required',
            'todo_priority' => 'required',
            'todo_comment' => 'required|max:255'
        ]);


        $id = $request->id;

        $update = DB::table('notes')
            ->where('id', $id)
            ->update([
                'title' => $request->todo_title,
                'deadline' => $request->todo_deadline,
                'category' => $request->todo_category,
                'priority' => $request->todo_priority,
                'comment' => $request->todo_comment,
                'updated_at' =>Carbon::now()
            ]);

        return redirect('dashboard')->with('status','Todo updated.');
    }
}
