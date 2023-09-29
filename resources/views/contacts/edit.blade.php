<div>
  <h1 for="body">Update Contact Info</h1>
  <form action="{{ route('contacts.update', ['contact' => $contact]) }}" method="post">
    @csrf
    @method('PUT')
    <div>
      <label for="name" class="sr-only">Name</label>
        <input type="text" name="name" id="name" placeholder="Name" value="{{ $contact->name }}">
        @error('name')
            {{ $message }}
          </div>
        @enderror
    </div>

    
    <div>
      <label for="email" class="sr-only">Email</label>
        <input type="text" name="email" id="email" placeholder="Email" value="{{ $contact->email }}">
        @error('email')
            {{ $message }}
          </div>
        @enderror
    </div>

    <div>
      <label for="phone" class="sr-only">Phone</label>
        <input type="text" name="phone" id="phone" placeholder="Phone" value="{{ $contact->phone }}">
        @error('phone')
            {{ $message }}
          </div>
        @enderror
    </div>

    <div>
      <label for="city" class="sr-only">City</label>
        <input type="text" name="city" id="city" placeholder="City" value="{{ $contact->city }}">
        @error('city')
            {{ $message }}
          </div>
        @enderror
    </div>

    <div>
      <label for="state" class="sr-only">State</label>
        <input type="text" name="state" id="state" placeholder="State" value="{{ $contact->state }}">
        @error('state')
            {{ $message }}
          </div>
        @enderror
    </div>

    <div>
      <label for="zip_code" class="sr-only">zip_code</label>
        <input type="text" name="zip_code" id="zip_code" placeholder="zip_code" value="{{ $contact->zip_code }}">
        @error('zip_code')
            {{ $message }}
          </div>
        @enderror
    </div>

    <div>
      <button type="submit">Update</button>
    </div>
  </form>
</div>