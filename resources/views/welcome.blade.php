@extends('layouts.includes._main')
@extends('layouts.includes._head')
@section('title', 'Welcome')

@section('content')
<div class="container-fluid">
    @extends('layouts.includes._header')
    <div class="row mt-3">
		<div class="col-md-12 text-center">
			<h2>@lang('translate.welcomeMenssage')</h3>
		</div>
        <div class="col-md-12 text-center mt-2">
			<h3>@lang('translate.requestUser')</h3>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-md-6">
			<p>
                Meu Nome é Pierre Mendes Salatiel Tenho 19 anos, sou estudante do curso de Sistemas de Informação pela Facthus. Nasci em Uberaba-MG. Meu interesse pela programação se iniciou em 2017 com a minha entrada no IFTM. A primeira "Linguagem" na qual tive meu primeiro contato foi o Portugol em seguida iniciei com o C#. Sempre gostei de Tecnologia mas a minha entrada no IFTM foi um divisor de águas onde pude aprender de: resolução de problemas com algoritmos à programação orientada a objetos. Sempre admirei as tecnologias e desejo cada vez mais aprender sobre elas...Visando ajudar o mundo com a solução de problemas através da Programação.
			</p>
		</div>

	    <div class="col-md-6">
	    	<address class="pl-5 ml-0">
	    		 <strong>Pierre Mendes Salatiel</strong><br /> Idade: 19 anos<br /> Cidade: Uberaba - MG<br /> Telefone: (34) 9-9140-3055<br />e-mail: pierretielmendes@gmail.com
	    	</address>
	    </div>
    </div>
</div>
@extends('layouts.includes._footer')
@endsection