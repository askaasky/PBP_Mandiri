<?php
class BankAccount {
    public $accountNumber;
    private $balance;

    public function __construct($accountNumber, $balance = 0) {
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function deposit($amount) {
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Berhasil menambahkan saldo sebesar: Rp {$amount}\n";
        } else {
            echo "Nominal deposit harus lebih dari 0\n";
        }
    }
    public function withdraw($amount) {
        if ($amount > 0 && $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Berhasil menarik saldo sebesar: Rp {$amount}\n";
        } else {
            echo "Transaksi gagal, saldo tidak mencukupi\n";
        }
    }
    public function getBalance() {
        return $this->balance;
    }
}
// Contoh penggunaan
$rekening = new BankAccount("18634951", 17000);
echo "Nomor Rekening: {$rekening->accountNumber}\n";
echo "Saldo Awal: Rp {$rekening->getBalance()}\n";
$rekening->deposit(23000);
echo "Saldo Saat Ini: Rp {$rekening->getBalance()}\n";
$rekening->withdraw(21000);
echo "Saldo Saat Ini: Rp {$rekening->getBalance()}\n";
?>