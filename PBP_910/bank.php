<?php
class BankAccount{
    public $accountNumber;
    private $balance;
    public function __construct($accountNumber, $balance=0){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function deposit($amount){
        if ($amount > 0) {
            $this->balance += $amount;
            echo "Anda menambah saldo sebesar: Rp. {$amount}\n";
        }
        else {
            echo "tidak boleh angka 0 dan mines\n";
        }
    }
    public function withdraw($amount){
        if ($amount > 0 and $amount <= $this->balance) {
            $this->balance -= $amount;
            echo "Anda mengurangi saldo sebesar: Rp. {$amount}\n";
        }else {
            echo "Saldo tidak cukup\n";
        }
    }
    public function getbalance(){
        return $this->balance;
    }

}
$rekening = new BankAccount(12345678,50000);
echo "Nomor Rekening: {$rekening->accountNumber}\n";
echo "Saldo: Rp. {$rekening->getbalance()}\n\n";
$rekening->deposit(10000);
echo "Saldo sekarang: Rp. {$rekening->getbalance()}\n\n";
$rekening->withdraw(40000);
echo "Saldo sekarang: Rp. {$rekening->getbalance()}\n"
?>