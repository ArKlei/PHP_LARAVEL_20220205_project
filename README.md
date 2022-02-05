# 20220205_project
 
******************* Užduotis: **********************

2022-02-05 Laravel užduotis Due tomorrow at 11:59 PM Instructions

1. Sukurti naują Laravel projektą.
2. Įtraukti autentifikacijos modulį.
3. Sukurti modelį Product
    id
    title(string)
    description(longText)
    price(float). Nustatyti kodu $table->float('price', 8, 2)
    category_id(unsignedBigInteger)
    image_url(string)
4. Sukurti modelį ProductCategory
    id
    title(string)
    description(longText)
5. Sudaryti ryšį: Product.category_id -> ProductCategory.id(Produktas priklauso kategorijai)
6. Užpildyti kategorijas 3 netikromis kategorijomis.
7. Užpildyti 150 netikrų produktų. Paveiksliukams naudoti $this->faker->imageUrl().
8. Produktams sukurti index.blade.php, create.blade.php, edit.blade.php ir sukurti pagal šiuos vaizdus CRUD operacijas.
Turi būti galimybė įkelti paveiksliuką.
9. Kategorijoms sukurti index.blade.php, create.blade.php, edit.blade.php ir sukurti pagal šiuos vaizdus CRUD operacijas.
10. Produktams sukurti rikiavimą TIK pagal kategorijos pavadinimą.
11. Produktams sukurti filtravimą pagal kategoriją.
12. Sukurti kategorijų rikiavimą pagal visus stulpelius(id, title, description)

******************* CRUD kūrimas: *******************

1. Sukurti projektą: New Terminal>composer create-project laravel/laravel projekto_pavadinimas.
2. Patikrinti ar viskas susikūrė, ar atsirado projektas + įkelti į github
3. Įeiti į projektą per cd projekto_pavadinimas
4. Per PhPMyAdmin sukurti duomenų bazę "projekto_pavadinimas ir nustatyti šriftą utf8mb4_unicode_ci + "create"
5. Faile ".env" 14 eilutėje pakeisti "laravel" į "projekto_pavadinimas"
6. Direktorijos "Config" faile "Database.php" 60 eilutėje pakeisti "null" į "'InnoDB'", su viengubomis kabutėmis! ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
7. Instaliuoti paketą composer require laravel/ui ("What is Laravel ui? Laravel UI is a new first-party package that extracts the UI portion of a Laravel project into a separate laravel/ui package. The separate package enables the Laravel team to iterate on the UI package separately from the main Laravel codebase.")
8. Instaliuoti autorizaciją php artisan ui vue --auth ("php artisan ui vue --auth -> The command will generate the auth routes and a VueJs starter template. php artisan ui:auth -> The command will generate the auth routes, a HomeController, auth views, and a app. blade. php layout file.")
9. Atlikti migraciją php artisan migrate ("Migrations are a type of version control for your database. They allow a team to modify the database schema and stay up to date on the current schema state. Migrations are typically paired with the Schema Builder to easily manage your application's schema.")
10. Paleisti npm install ("npm install downloads a package and it's dependencies. npm install can be run with or without arguments. When run without arguments, npm install downloads dependencies defined in a package. json file and generates a node_modules folder with the installed modules. / NPM is used to manage dependencies for packages. If you were to unpack a framework and use it outside NPM, you would have to do this every time you want to update the framework. NPM does this for you. You always know what version you're on, and you can limit a dependency to a specific major/minor/patch version. / The name npm (Node Package Manager) stems from when npm first was created as a package manager for Node. js. All npm packages are defined in files called package. json. The content of package.")
11. Paleisti npm run dev ("run : It is a command native to npm. More information here. Keep in mind this is an aliases to the original command run-script . dev and prod : They're user defined. dev : Used for running the specific commands for serving the project, to any server, to live")
12. Esant klaidoms (pabėgęs app dizainas) - ištrinti bylą package-lock.json, package.json pakeisti 23 eilutėje versiją iš "7" į "8", ištrinti "node_modules" direktoriją ir vėl paleisti "npm i" bei "npm run dev" ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
13. Sukurti modelį: php artisan make:model Product --all
14. Sukurti modelį: php artisan make:model ProductCategory --all
15. Pasitikrinti ar "App>Http>Controllers" aplanke susikūrė PavadinimasController.php ir App>Models atsirado modelis Pavadinimas.php?
16. Patikriname ar "App>Database>migrations" aplanke atsirado Metai_menuo_diena_numeris_create_pavadinimas(daugiskaita)_table.php failas? Kiekvienam modeliui! 
17. ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
18. Numatyti modelių/Objektų savybių rinkinius ir ryšius tarp jų web.php route suformavimui ir migracijos eiliškumui parinkti.
19. Sukurti modelio/objekto "ProductCategory" savybes/DB duomenų tipus: id, title(string), description(longText) ir ryšį per hasMany su Product per savo id ir product_category_id (kategorija gali tūrėti daug produktų).
20. Sukurti modelio/objekto "Product" savybes/DB duomenų tipus: id, title(string), description(longText), price(float), nustatyti kodu $table->float('price', 8, 2), category_id(unsignedBigInteger), image_url(string) bei ryšį foreign su ProductCategory per savo category_id į id.
21. Paleisti "php artisan migrate:fresh", prieš tai įsitikinus ar aplamai paleistas xampp!. Per PhPMyAdmin, duombazės lentelėse per "Structure" galima pamatyti kas įsirašė: "ženklų apribojimas, unsigned, kt...
22. Patikrinti kokia eilės tvarka migracijos bylų: pirma - mažiausia (ProductCategory), poto (Product). 
23. Per PhPMyAdmin patikrinti ar duomenų bazės (projekto pavadinimas) lentelės (pavadinimai atitinka sukurtus modelius) atsirado stulpeliai su užduotais pavadinimais ir duomenų tipais "Schema" metode. 
24. ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
25. ProductFactory.php ir ProductCategoryFactory.php metoduose Definition turime sudaryti brėžinius, pagal kurį gaminsim produktus ir kategorijas - jų duomenis.
26. Užpildyti kategorijas 3 netikromis kategorijomis:'title' => $this->faker->sentence(1), 'description' => $this->faker->paragraph(5).
27. Užpildyti 150 netikrų produktų. Paveiksliukams naudoti $this->faker->imageUrl(): 'description' => $this->faker->paragraph(5),'price' => rand(0,1000),'category_id'=> rand(1,3),'image_url' =>$this->faker->imageUrl().
28. Užpildyti ProductSeeder.php 150 produktų: Product::factory()->count(150)->create(); ir use App\Models\Product; viršuje.
29. Užpildyti ProductCategorySeeder.php 3 kategorijomis: ProductCategory::factory()->count(3)->create(); ir use App\Models\ProductCategory; viršuje.
30. Užpildyti DatabaseSeeder.php metodu iškviesti užpildytus seeder failus: $this->call([ ProductCategorySeeder::class, ProductSeeder::class ]); ir viršuje nurodyti abų modelius: use App\Models\Product; use App\Models\ProductCategory; (svarbu eiliškumas, kuri kursis pirmas).
31. Paleisti php artisan migrate:fresh --seed ir tikrinti duomenų bazę.
32. ĮRAŠYTI Į GITHUB - SU COMMIT KĄ ATLIKAU
33. Produktams sukurti index.blade.php, create.blade.php, edit.blade.php ir sukurti pagal šiuos vaizdus CRUD operacijas. Turi būti galimybė įkelti paveiksliuką.
34. Kategorijoms sukurti index.blade.php, create.blade.php, edit.blade.php ir sukurti pagal šiuos vaizdus CRUD operacijas.
