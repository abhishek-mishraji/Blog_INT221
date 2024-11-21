<x-main-layout>
    <div style="max-width: 900px; margin: 0 auto; padding: 20px; font-family: 'Segoe UI', Tahoma, sans-serif; color: #333; background: #f3f4f6; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
        <h1 style="text-align: center; color: #2c3e50; margin-bottom: 25px; font-size: 2em; font-weight: bold; text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);">
            📬 Messages
        </h1>
        @php
        $sortedMessages = $messages->sortByDesc('created_at');
    @endphp
    
    <ul style="list-style: none; padding: 0; margin: 0;">
        @foreach ($sortedMessages as $message)
            <li style="background: #ffffff; border: 1px solid #e1e8ed; border-radius: 12px; margin-bottom: 20px; padding: 20px; transition: transform 0.3s ease, box-shadow 0.3s ease; cursor: pointer; box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);">
                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px; font-weight: bold; color: #34495e;">
                    <span>
                        <strong>Name:</strong> {{ $message->name }}
                    </span>
                    <span style="font-size: 0.85em; color: #95a5a6; font-style: italic;">
                        {{ $message->created_at->format('Y-m-d H:i:s') }}
                    </span>
                </div>
                <div style="margin-bottom: 8px; line-height: 1.8; color: #7f8c8d;">
                    <strong>Email:</strong> {{ $message->email }}
                </div>
                <div style="margin-bottom: 8px; line-height: 1.8; color: #7f8c8d;">
                    <strong>Message:</strong> {{ $message->body }}
                </div>
            </li>
        @endforeach
    </ul>
    
    </div>
</x-main-layout>
