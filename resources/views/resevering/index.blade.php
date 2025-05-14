<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Booking Overview</h1>

        <!-- Display Existing Bookings -->
        @if ($reserveringen->isEmpty())
            <p class="text-gray-700">No bookings available.</p>
        @else
            <table class="table-auto w-full bg-white shadow-md rounded mb-6">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2">First Name</th>
                        <th class="px-4 py-2">Last Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Time</th>
                        <th class="px-4 py-2">Seats</th>
                        <th class="px-4 py-2">Film</th>
                        <th class="px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reserveringen as $booking)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $booking->first_name }}</td>
                            <td class="px-4 py-2">{{ $booking->last_name }}</td>
                            <td class="px-4 py-2">{{ $booking->email }}</td>
                            <td class="px-4 py-2">{{ $booking->phone }}</td>
                            <td class="px-4 py-2">{{ $booking->time }}</td>
                            <td class="px-4 py-2">{{ $booking->seats }}</td>
                            <td class="px-4 py-2">{{ $booking->film->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
    <div class="text-center mt-10">
        <a href="{{ route('resevering.create') }}"
            class="inline-block bg-blue-600 hover:bg-blue-700 text-gray-300 font-semibold py-3 px-6 rounded-lg shadow-md transition duration-300">
            ➕ Film toevoegen
        </a>
    </div>
</x-base-layout>