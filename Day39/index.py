import numpy as np
import matplotlib.pyplot as plt

# 1. Buat array berisi 50 angka random antara 0-100
array_pertama = np.random.randint(0, 101, 50)

# 2. Hitung mean, median, & standard deviasi dari data tersebut
mean_array = np.mean(array_pertama)
median_array = np.median(array_pertama)
std_dev_array = np.std(array_pertama)

# 3. Berikan daftar angka yang lebih tinggi dari rata-rata
angka_diatas_rata2 = array_pertama[array_pertama > mean_array]

# 4. Buat array baru yang mengandung semua angka genap dari array pertama
array_genap = array_pertama[array_pertama % 2 == 0]

# 5. Cari angka minimum & maksimum dari array kedua
min_genap = np.min(array_genap)
max_genap = np.max(array_genap)

# 6. Rubah bentuk array pertama menjadi 5x10 matrix
matrix_5x10 = array_pertama.reshape(5, 10)

# 7. Lakukan transpose & hitung jumlah setiap baris
matrix_transpose = matrix_5x10.T
jumlah_per_baris = np.sum(matrix_transpose, axis=1)

# 8. Buat histogram sederhana dari array pertama
plt.hist(array_pertama, bins=10, edgecolor='black')
plt.title("Histogram dari Array Pertama")
plt.xlabel("Nilai")
plt.ylabel("Frekuensi")
plt.show()

# Menampilkan hasil
print("Array pertama:", array_pertama)
print("Mean:", mean_array)
print("Median:", median_array)
print("Standard Deviasi:", std_dev_array)
print("Angka di atas rata-rata:", angka_diatas_rata2)
print("Array Genap:", array_genap)
print("Min Genap:", min_genap)
print("Max Genap:", max_genap)
print("Matrix 5x10:\n", matrix_5x10)
print("Transpose Matrix 5x10:\n", matrix_transpose)
print("Jumlah setiap baris setelah transpose:", jumlah_per_baris)
