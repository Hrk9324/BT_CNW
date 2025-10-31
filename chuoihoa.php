<!DOCTYPE html>
<html lang="en">
<head>
    <script>
        function ChuoiHoa() {
            var st = document.f1.t1.value;
            document.f1.t1.value = st.toUpperCase();
        }
    </script>
</head>
<body>
    <form name = f1 method="" action="">
        <input type="text" name="t1" value="" onblur="ChuoiHoa()">
    </form>
</body>
</html>