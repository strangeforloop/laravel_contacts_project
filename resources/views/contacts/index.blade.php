<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Contacts Project</title>
  </head>
  <body>
    <div>
      <h1 for="body">New Contact Info</h1>
      <div style="display:flex;flex-direction:row">
      <div style="display:flex;flex-direction:column">
        <label for="name" style="margin-right:10px;padding:1.5px">Name</label>
        <label for="email" style="margin-right:10px;padding:1.5px">Email</label>
        <label for="phone" style="margin-right:10px;padding:1.5px">Phone</label>
        <label for="city" style="margin-right:10px;padding:1.5px">City</label>
        <label for="country" style="margin-right:10px;padding:1.5px">Country</label>
        <label for="state" style="margin-right:10px;padding:1.5px">State</label>
        <label for="zip_code" style="margin-right:10px;padding:1.5px">Zip Code</label>
      </div>
      <form action="{{ route('contacts') }}" method="post" style="margin-bottom:2rem">
        @csrf
        <div style="display:flex;flex-direction:row">
          <!-- <div style="display:flex;flex-direction:column">
            <label for="name" style="margin-right:10px;padding:1.5px">Name</label>
            <label for="email" style="margin-right:10px;padding:1.5px">Email</label>
            <label for="phone" style="margin-right:10px;padding:1.5px">Phone</label>
            <label for="city" style="margin-right:10px;padding:1.5px">City</label>
            <label for="country" style="margin-right:10px;padding:1.5px">Country</label>
            <label for="state" style="margin-right:10px;padding:1.5px">State</label>
            <label for="zip_code" style="margin-right:10px;padding:1.5px">Zip Code</label>
          </div> -->
          <div>
            <div>
              <input type="text" name="name" id="name" placeholder="Name" value="">
              @error('name')
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div>
                <input type="text" name="email" id="email" placeholder="Email" value="">
                @error('email')
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div>
                <input type="text" name="phone" id="phone" placeholder="Phone" value="">
                @error('phone')
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div>
                <input type="text" name="city" id="city" placeholder="City" value="">
                @error('city')
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div>
                <input type="text" country="country" id="country" placeholder="Country" value="">
                @error('country')
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div>
                <input type="text" name="state" id="state" placeholder="State" value="">
                @error('state')
                    {{ $message }}
                  </div>
                @enderror
            </div>

            <div>
                <input type="text" name="zip_code" id="zip_code" placeholder="Zip Code" value="">
                @error('zip_code')
                    {{ $message }}
                  </div>
                @enderror
            </div>
          </div>
          
        </div>
        <div>
          <button type="submit">Submit</button>
        </div>
        </form>
      </div>
    
      @if ($contacts->count())
      <div style="max-width:60%">
        <h3>Saved Contacts</h3>
        @foreach ($contacts as $contact)
          <div style="padding:10px;border-style:solid;margin-bottom:1rem">
            <div style="margin-bottom:1rem">
              <span style="border:1px">{{ $contact->name }}</span>
              <span style="border:1px">{{ $contact->email }}</span>
              <span style="border:1px">{{ $contact->phone }}</span>
              <span style="border:1px">{{ $contact->city }}</span>
              <span style="border:1px">{{ $contact->state }}</span>
              <span style="border:1px">{{ $contact->zip_code }}</span>
            </div>
            <div style="display:flex">
              <form action="{{ route('contacts.edit', ['contact' => $contact]) }}" method="get" style="margin-right: 0.8rem">
                @csrf
                <button type="submit" class="">Edit</button>
              </form>
              <form action="{{ route('contacts.destroy', ['contact' => $contact]) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="">Delete</button>
              </form>
            </div>
          </div>
        @endforeach
      </div>
      @else
        <h4>Try adding some contacts above!</h4>
      @endif
    </div>
  </body>
</html>