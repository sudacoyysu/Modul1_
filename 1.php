<?php
// Namespace untuk mengatur kelas dalam grup
namespace Gudang\Inventaris;

// Trait untuk penanganan stok penambahan stock
trait StokHandler {
    private $stok = 0;

    public function tambahStok($jumlah) {
        $this->stok += $jumlah;
    }

    public function kurangiStok($jumlah) {
        if ($jumlah <= $this->stok) {
            $this->stok -= $jumlah;
        }
    }

    public function getStok() {
        return $this->stok;
    }
}

// Abstract Class
abstract class Barang {
    protected $nama;
    protected $harga;

    public function __construct($nama, $harga) {
        $this->nama = $nama;
        $this->harga = $harga;
    }

    abstract public function deskripsi();
}

// Class Elektronik yang mengimplementasikan abstract class Barang
class Elektronik extends Barang {
    use StokHandler;

    private $garansi;

    public function __construct($nama, $harga, $garansi) {
        parent::__construct($nama, $harga);
        $this->garansi = $garansi;
    }

    public function deskripsi() {
        return "Elektronik: {$this->nama}, Harga: {$this->harga}, Garansi: {$this->garansi} tahun";
    }
}

// Class Furniture yang mengimplementasikan abstract class Barang
class Furniture extends Barang {
    use StokHandler;

    private $bahan;

    public function __construct($nama, $harga, $bahan) {
        parent::__construct($nama, $harga);
        $this->bahan = $bahan;
    }

    public function deskripsi() {
        return "Furniture: {$this->nama}, Harga: {$this->harga}, Bahan: {$this->bahan}";
    }
}

// Main Program
$elektronik = new Elektronik("Laptop", 10000000, 2);
$elektronik->tambahStok(10);
echo $elektronik->deskripsi() . "\n";
echo "Stok: " . $elektronik->getStok() . "\n";

$furniture = new Furniture("Meja", 500000, "Kayu");
$furniture->tambahStok(5);
echo $furniture->deskripsi() . "\n";
echo "Stok: " . $furniture->getStok() . "\n";
?>
