class Kalkulator:
    def __init__(self):
        # Konstruktor tanpa parameter untuk membuat kalkulator
        pass

    def tambah(self, angka1, angka2):
        # Metode untuk penjumlahan
        return angka1 + angka2

    def kurang(self, angka1, angka2):
        # Metode untuk pengurangan
        return angka1 - angka2

    def kali(self, angka1, angka2):
        # Metode untuk perkalian
        return angka1 * angka2

    def bagi(self, angka1, angka2):
        # Metode untuk pembagian dengan pengecekan pembagian dengan nol
        if angka2 == 0:
            return "Error: Tidak bisa membagi dengan nol."
        return angka1 / angka2

# Membuat objek kalkulator
kalkulator = Kalkulator()

# Mengambil input dari pengguna
angka1 = float(input("Masukkan angka pertama: "))
angka2 = float(input("Masukkan angka kedua: "))

# Melakukan operasi menggunakan objek kalkulator
print("Pilih operasi:")
print("1. Penjumlahan")
print("2. Pengurangan")
print("3. Perkalian")
print("4. Pembagian")

pilihan = input("Masukkan pilihan (1/2/3/4): ")

if pilihan == '1':
    print("Hasil Penjumlahan:", kalkulator.tambah(angka1, angka2))
elif pilihan == '2':
    print("Hasil Pengurangan:", kalkulator.kurang(angka1, angka2))
elif pilihan == '3':
    print("Hasil Perkalian:", kalkulator.kali(angka1, angka2))
elif pilihan == '4':
    print("Hasil Pembagian:", kalkulator.bagi(angka1, angka2))
else:
    print("Pilihan tidak valid.")
