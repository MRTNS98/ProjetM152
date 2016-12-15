<div class="addForm">
    <form method="POST" action="?" class="form-horizontal">
        <fieldset>
            <div class="form-group">
                <label for="inputAutor" class="col-lg-2 control-label">Auteur :</label>
                <div class="col-lg-10">
                    <input type="text" name="Autor" class="form-control" id="inputAutor" placeholder="Nom de l'auteur">
                </div>
            </div>

            <div class="form-group">
                <label for="selectCateg" class="col-lg-2 control-label">Catégorie :</label>
                <div class="col-lg-10">
                    <select class="form-control" name="Categorie" id="selectCateg" onchange="categInterface()">
                        <option>Image (non dynamique)</option>
                        <option>Vidéo (non dynamique)</option>
                        <option>Blague (non dynamique)</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label for="selectSection" class="col-lg-2 control-label">Section :</label>
                <div class="col-lg-10">
                    <select class="form-control" name="Section" id="selectSection">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label" id="lblImage">Image :</label>
                <label class="col-lg-2 control-label" id="lblCodeVideo" style="display:none">Code vidéo :</label>
                <label class="col-lg-2 control-label" id="lblBlague" style="display:none">Blague :</label>
                <div class="col-lg-10">
                    <input type="file" name="PictureUpload" id="picUpload">
                    <input type="text" name="CodeVideo" class="form-control" id="inputCodeVideo" style="display:none" placeholder="lFGHkULtQRQ">
                    <textarea class="form-control" name="Blague" rows="3" id="textAreaBlague" style="display:none" placeholder="Toto...."></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-lg-2 control-label" id="lblDescription">Description :</label>
                <div class="col-lg-10">
                    <textarea class="form-control" name="Description" rows="3" id="textAreaDescription"></textarea>
                </div>
            </div>

            <input type="submit" value="Ajouter" class="btn btn-default">
        </fieldset>
    </form>
</div>

<script>
    function categInterface() {
        d = document.getElementById("selectCateg").value;
        switch (d) {
            case "Image (non dynamique)":
                document.getElementById("lblImage").style.display = 'block';
                document.getElementById("lblCodeVideo").style.display = 'none';
                document.getElementById("lblBlague").style.display = 'none';

                document.getElementById("picUpload").style.display = 'block';
                document.getElementById("inputCodeVideo").style.display = 'none';
                document.getElementById("textAreaBlague").style.display = 'none';

                document.getElementById("textAreaDescription").style.display = 'block';
                document.getElementById("lblDescription").style.display = 'block';
                break;
            case "Vidéo (non dynamique)":
                document.getElementById("lblImage").style.display = 'none';
                document.getElementById("lblCodeVideo").style.display = 'block';
                document.getElementById("lblBlague").style.display = 'none';

                document.getElementById("picUpload").style.display = 'none';
                document.getElementById("inputCodeVideo").style.display = 'block';
                document.getElementById("textAreaBlague").style.display = 'none';

                document.getElementById("textAreaDescription").style.display = 'block';
                document.getElementById("lblDescription").style.display = 'block';
                break;
            case "Blague (non dynamique)":
                document.getElementById("lblImage").style.display = 'none';
                document.getElementById("lblCodeVideo").style.display = 'none';
                document.getElementById("lblBlague").style.display = 'block';

                document.getElementById("picUpload").style.display = 'none';
                document.getElementById("inputCodeVideo").style.display = 'none';
                document.getElementById("textAreaBlague").style.display = 'block';

                document.getElementById("textAreaDescription").style.display = 'none';
                document.getElementById("lblDescription").style.display = 'none';
                break;
        }
    }
</script>