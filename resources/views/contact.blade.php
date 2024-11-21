<x-main-layout>
    <div class="article">
        <div class="contact_form">
            <div class="leave_message">Leave a message!</div>
            {{-- ******************************* --}}
            @if (session('success'))
                <script>
                    alert('{{ session('success') }}');
                </script>
                @endif
            {{-- ************************************************ --}}
            <div class="body_form">
                <img src="{{ asset('images/open.png') }}" alt="">
                <form method="POST" action="/contact">
                    @csrf
                    <label>Name</label>
                    <input type="text" name="name">
                    <label>Email</label>
                    <input type="email" name="email">
                    <label>Message</label>
                    <textarea name="body"></textarea>

                    <input type="submit" value="Submit">
                </form>
               

            </div>
        </div>
    </div>
</x-main-layout>
