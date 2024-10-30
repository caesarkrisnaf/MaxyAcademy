def main():
    print("Kalkulator Sederhana")
    print("-------------------")
    
    # Meminta pengguna untuk memasukkan angka
    angka1 = float(input("Masukkan angka pertama: "))
    angka2 = float(input("Masukkan angka kedua: "))
    
    # Menampilkan menu operasi
    print("\nPilih Menu Operasi:")
    print("1 - Penjumlahan")
    print("2 - Pengurangan")
    print("3 - Perkalian")
    print("4 - Pembagian")
    
    # Meminta pengguna memilih operasi
    pilihan = input("Masukkan pilihan operasi (1/2/3/4): ")
    
    # Mengecek pilihan dan menghitung hasilnya
    if pilihan == '1':
        hasil = angka1 + angka2
        operasi = "Penjumlahan"
    elif pilihan == '2':
        hasil = angka1 - angka2
        operasi = "Pengurangan"
    elif pilihan == '3':
        hasil = angka1 * angka2
        operasi = "Perkalian"
    elif pilihan == '4':
        if angka2 != 0:
            hasil = angka1 / angka2
            operasi = "Pembagian"
        else:
            print("Error: Pembagian dengan nol tidak diperbolehkan.")
            return
    else:
        print("Pilihan tidak valid.")
        return
    
    # Menampilkan hasil operasi dengan pembulatan jika bilangan bulat
    if hasil.is_integer():
        hasil = int(hasil)  # Mengubah hasil ke integer jika hasilnya bilangan bulat
    
    print(f"\nHasil {operasi} dari {angka1} dan {angka2} adalah: {hasil}")

# Menjalankan program
main()
