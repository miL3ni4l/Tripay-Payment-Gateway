<html>
    <head>
        <title>
            Persembahan TriPay
        </title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js" integrity="sha512-XKa9Hemdy1Ui3KSGgJdgMyYlUg1gM+QhL6cnlyTe2qzMCYm4nAZ1PsVerQzTTXzonUR+dmswHqgJPuwCq1MaAg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>
    
    <body>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <h4>Persembahan</h4>
                    <form method="post" action="#">
                        @csrf
                        
                        <div class="form-group">
                          <label for="nama">Nama :</label>
                          <input type="text" required name="nama" class="form-control" id="nama">
                        </div>
                        
                        <div class="form-group">
                          <label for="email">Email :</label>
                          <input type="email" required name="email" class="form-control" id="email">
                        </div>
                        
                        <div class="form-group">
                          <label for="nohp">No Hp :</label>
                          <input type="text" required name="nohp" class="form-control" id="nohp">
                        </div>
                        
                        <div class="form-group">
                          <label for="nominal">Nominal :</label>
                          <input type="number" required name="nominal" class="form-control" id="nominal">
                        </div>
                        
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>        
                </div>
            </div>
        </div>
        
    </body>
</html>