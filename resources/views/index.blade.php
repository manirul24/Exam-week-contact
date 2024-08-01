<x-app>

 
 
<div class="container">
    <h1>Contacts List</h1>

 

   
    <form method="GET" action="{{ route('contacts.index') }}">
        <fieldset class="accent">  <legend>Search</legend>  <input type="text" name="search" placeholder="Search by name or email">
        <button type="submit">Search</button>
    </fieldset>
    </form>

    <h3><a href="{{ route('contacts.create') }}" class="btn btn-primary">Create New Contact</a></h3>
    @if(session()->has('message'))
    <div class="alert alert-success bg-attention" style="font-color:#000; text-align:center;">
        {{ session()->get('message') }}
    </div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th><a href="{{ route('contacts.index', ['sort' => 'name']) }}">Name</a></th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th><a href="{{ route('contacts.index', ['sort' => 'created_at']) }}">Created At</a></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>

          @if( count( $contacts) == 0) 
           <tr><td colspan="6">Data not Found!</td></tr>
         @else       
          
          


            @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->name }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>{{ $contact->phone }}</td>
                    <td>{{ $contact->address }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                         <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form> 
                    </td>
                </tr>
            @endforeach


            @endif
        </tbody>
    </table>
</div>
 

</x-app>
