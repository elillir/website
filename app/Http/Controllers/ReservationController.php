<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Table;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReservationController extends Controller
{
    public function index()
    {
        return view('reservations.index');
    }

    public function create()
    {
        $tables = Table::where('is_available', true)->get();
        return view('reservations.create', compact('tables'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'table_id' => 'required|exists:tables,id',
            'customer_name' => 'required|string|max:255',
            'customer_phone' => 'required|string|max:20',
            'customer_email' => 'required|email|max:255',
            'reservation_time' => 'required|date|after:now',
            'guests_count' => 'required|integer|min:1',
            'special_requests' => 'nullable|string',
        ]);

        $reservationTime = Carbon::parse($validated['reservation_time']);
        $existingReservation = Reservation::where('table_id', $validated['table_id'])
            ->where('reservation_time', '>=', $reservationTime->subHours(2))
            ->where('reservation_time', '<=', $reservationTime->addHours(2))
            ->exists();

        if ($existingReservation) {
            return back()->withErrors(['reservation_time' => 'Этот столик уже забронирован на выбранное время.'])->withInput();
        }

        Reservation::create($validated);

        return redirect()->route('home')->with('success', 'Столик успешно забронирован!');
    }
}
