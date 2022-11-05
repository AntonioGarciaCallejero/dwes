<header>
  <ul>
    <!-- estos son los enlaces al login y al index que salen arriba -->
    <!-- creo que es la url la que iguala method a index o login -->
    <!-- todo lo que vaya en la url asi va a ir en el get -->
    <!-- te van a llevar siempre a index con distinto metodo en el GET -->
    <li><a href="/solucionest2/ejercicio17?method=index">Inicio</a></li>
    <!-- si le damos a esto luego lo que va a pasar es que en la funcion
    run de la clase app va a llamar a la funcion del mismo nombre -->
    <!-- asi pues vamos a necesitar uno de estos por cada funcion que hagamos -->
    <li><a href="/solucionest2/ejercicio17?method=fibonacci">Fibonacci</a></li>
    <li><a href="/solucionest2/ejercicio17?method=potencias2">Potencias 2</a></li>
    <li><a href="/solucionest2/ejercicio17?method=factoriales">Factoriales</a></li>
    <li><a href="/solucionest2/ejercicio17?method=primos">Primos</a></li>
  </ul>
</header>
