<h2>Kas ir API</h2>
<p>The way the server interacts with the client</p>

<h2>Kā deklarēt mainīgo PHP valodā?</h2>
<p>$mainīgā_nosaukums = vērtība;</p>

<h2>Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā</h2>
<p>MVC - model, view controller. model is the data structure, view is the data output and controller is the data processing</p>
<p>the controller receives the client's request, then takes the data from the model and sends it to the user (view) </p>

<h2>Kas ir ORM, kāpēc to izmanto tīra SQL vietā?</h2>
<p>Object-Relational Mapping (ORM, O/RM, and O/R Mapping Tool) in computer science is a programming technique for converting data between a relational database and an object-oriented programming language stack. This effectively creates a database of virtual objects that can be used in a programming language.</p>

<h2>Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus
lietotājus kuriem reitings ir lielāks par 4.</h2>
<p>User::where('rating', '>', 4)->get();</p>