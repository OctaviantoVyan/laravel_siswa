<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // Validasi input untuk memastikan pencarian aman
        $request->validate([
            'q' => 'nullable|string|max:255',
        ]);

        // Judul halaman
        $data['title'] = 'Customers';

        // Dapatkan input pencarian
        $search = $request->input('q');

        // Ambil data pelanggan berdasarkan pencarian, atau semua jika tidak ada pencarian
        $data['customers'] = Customer::when($search, function ($query, $search) {
            return $query->where('customer_name', 'like', '%' . $search . '%');
        })->get();

        // Kembalikan tampilan dengan data yang sudah diproses
        return view('customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data = [
            'title' => 'Add Customer'
        ];

        // Kembalikan tampilan dengan data
        return view('customer.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'contact_name'  => 'required|string|max:255',
        ]);

        // Buat instance model Customer dengan input yang telah divalidasi
        $customer = new Customer($request->only(['customer_name', 'contact_name']));

        // Simpan data pelanggan ke database
        $customer->save();

        // Redirect ke halaman customer dengan pesan sukses
        return redirect()->route('customer.index')->with('success', 'Customer added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        // Periksa apakah pelanggan ditemukan
        if (!$customer) {
            return redirect()->route('customer.index')->with('error', 'Customer not found');
        }

        // Set data untuk ditampilkan di halaman edit
        $data = [
            'title'    => 'Edit Customer',
            'customer' => $customer
        ];

        // Kembalikan tampilan dengan data yang diperlukan
        return view('customer.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        // Validasi input
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'contact_name'  => 'required|string|max:255',
            'address'       => 'nullable|string|max:255',
            'city'          => 'nullable|string|max:255',
        ]);

        // Update customer data menggunakan mass assignment yang aman
        $customer->update($request->only(['customer_name', 'contact_name', 'address', 'city']));

        // Redirect ke halaman customer dengan pesan sukses
        return redirect()->route('customer.index')->with('success', 'Customer updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        try {
            // Hapus pelanggan
            $customer->delete();

            // Redirect ke halaman daftar pelanggan dengan pesan sukses
            return redirect()->route('customer.index')->with('success', 'Customer deleted successfully');
        } catch (\Exception $e) {
            // Tangani jika terjadi kesalahan saat penghapusan
            return redirect()->route('customer.index')->with('error', 'Failed to delete customer');
        }
    }
}
