<x-base-layout>
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6">Booking Overview</h1>

        <!-- Display Existing Bookings -->
        @if ($booking->isEmpty())
            <p class="text-gray-700">No bookings available.</p>
        @else
            <table class="table-auto w-full bg-white shadow-md rounded mb-6">
                <thead>
                    <tr class="bg-gray-200 text-gray-700">
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Email</th>
                        <th class="px-4 py-2">Phone</th>
                        <th class="px-4 py-2">Time</th>
                        <th class="px-4 py-2">Seat / Row</th>
                        <th class="px-4 py-2">Film</th>
                        <th class="px-4 py-2">-</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking->where('name', auth()->user()->name) as $booking)
                        <tr class="border-t">
                            <td class="px-4 py-2">{{ $booking->name }}</td>
                            <td class="px-4 py-2">{{ $booking->email }}</td>
                            <td class="px-4 py-2">{{ $booking->phone }}</td>
                            <td class="px-4 py-2">{{ $booking->time }}</td>
                            <td class="px-4 py-2">{{ $booking->seat->seat_number }} / {{ $booking->seat->row_number }}</td>
                            <td class="px-4 py-2">{{ $booking->film->title }}</td>
                            <td class="px-4 py-2">
                                <form action="{{ route('resevering.delete', $booking->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this booking?');" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="inline-flex items-center gap-2 bg-red-100 hover:bg-red-200 text-red-700 font-semibold px-3 py-1 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-red-400">
                                        Reservering annuleren
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-base-layout>