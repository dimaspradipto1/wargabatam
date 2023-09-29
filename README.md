## 👨🏻‍💻[Features](https://github.com/dimaspradipto1/e-warga)

- Data Warga
    - warga
    - kartu keluarga
- Pengelolan Warga
    - data pendatang
    - data pindah
    - data kelahiran
    - data kematian
- Data lainnya
    - pendidikan
    - pekerjaan
    - keperluan
- Pengelolaan Surat
    - pengantar RT
- Pengelolaan User
    - pengguna sistem

## [🚀 How to Use](https://github.com/fajarghifar/inventory-management-system#-how-to-use)

1. **Clone Repository or Download**
    
    ```
    $ git clone https://github.com/dimaspradipto1/e-warga.git
    ```
    
2. **Setup**
    
    ```
    # Go into the repository
    $ cd e-warga
    
    # Install dependencies
    $ composer install
    
    # Open with your text editor
    $ code .
    ```
    
3. **.ENV**
    
    Rename or copy the `.env.example` file to `.env`
    
    ```
    # Generate app key
    $ php artisan key:generate
    ```
    
4. **Setup Database**
    
    Setup your database credentials in your `.env` file.
    
5. **Seed Database**
    
    ```
    $ php artisan migrate:fresh --seed
    
    # Note: If showing an error, please try to rerun this command.
    ```
    
6. **Run Server**
    
    ```
    $ php artisan serve
    ```
    
7. **Login**
    
    Try login with email: admin@gmail.com and password: admin
    

## [📝 Contributing](https://github.com/dimaspradipto1/e-warga)

If you have any ideas to make it more interesting, please send a PR or create an issue for a feature request.
