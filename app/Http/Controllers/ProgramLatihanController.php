<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use PDOException;

class ProgramLatihanController extends Controller
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=127.0.0.1;dbname=metameal", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            abort(500, "Koneksi Gagal: " . $e->getMessage());
        }
    }

    /**
     * Halaman untuk trainer
     */
    public function programlatihan_trainer()
    {
        $stmt = $this->db->query("SELECT * FROM program_latihan ORDER BY tanggal ASC");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return view('pages.trainer.programlatihan', ['data' => $data]);
    }

    /**
     * Halaman untuk trainee - hanya view
     */
    public function programlatihan()
    {
        $stmt = $this->db->query("SELECT * FROM program_latihan ORDER BY tanggal ASC");
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return view('pages.programlatihan', ['data' => $data]); // kirim data juga
    }

    /**
     * Simpan data - hanya digunakan oleh trainer
     */
    public function store(Request $request)
    {
        try {
            $data = json_decode($request->getContent(), true);

            $stmt = $this->db->prepare("INSERT INTO program_latihan (nama, tanggal, jenis_latihan, details, status) 
                                        VALUES (:nama, :tanggal, :jenis_latihan, :details, :status)");
            $stmt->execute([
                'nama' => $data['nama'],
                'tanggal' => $data['tanggal'],
                'jenis_latihan' => $data['jenis_latihan'],
                'details' => $data['details'],
                'status' => $data['status'] ?? 'not yet'
            ]);

            return response()->json(['message' => 'Data berhasil ditambahkan']);
        } catch (PDOException $e) {
            return response()->json(['message' => 'Gagal tambah data: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Update data - hanya untuk trainer
     */
    public function update(Request $request, $id)
    {
        try {
            $data = json_decode($request->getContent(), true);

            $stmt = $this->db->prepare("UPDATE program_latihan SET 
                                            nama = :nama,
                                            tanggal = :tanggal,
                                            jenis_latihan = :jenis_latihan,
                                            details = :details,
                                            status = :status
                                        WHERE id = :id");
            $stmt->execute([
                'id' => $id,
                'nama' => $data['nama'],
                'tanggal' => $data['tanggal'],
                'jenis_latihan' => $data['jenis_latihan'],
                'details' => $data['details'],
                'status' => $data['status'] ?? 'not yet'
            ]);

            return response()->json(['message' => 'Data berhasil diperbarui']);
        } catch (PDOException $e) {
            return response()->json(['message' => 'Gagal update data: ' . $e->getMessage()], 500);
        }
    }

    /**
     * Hapus data - hanya untuk trainer
     */
    public function destroy($id)
    {
        try {
            $stmt = $this->db->prepare("DELETE FROM program_latihan WHERE id = ?");
            $stmt->execute([$id]);

            return response()->json(['message' => 'Data berhasil dihapus']);
        } catch (PDOException $e) {
            return response()->json(['message' => 'Gagal hapus data: ' . $e->getMessage()], 500);
        }
    }
}
