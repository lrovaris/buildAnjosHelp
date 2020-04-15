<?php

require_once("conexao.php");	
	function opcoes(){
		$conn = conexao();
		$sql = "SELECT * FROM profissoes WHERE ativos>0 ORDER BY profissao ASC LIMIT 12";
		$query = mysqli_query($conn, $sql) or die ( "Falha na Busca: " . mysqli_error($conn));
		
		$dados = "<option value='none'>Profissões</option>";
			while($sql = mysqli_fetch_array($query)){
				$dados .= "<option value='" . $sql['id'] . "'>" . $sql['profissao'] . "</option>";
			}	
			
		echo $dados;
		//mysql_close();
	}

	function Profissoes(){
		$conn = conexao();
		$sql = "SELECT * FROM profissoes WHERE id>0 ORDER BY profissao ASC";
		$query = mysqli_query($conn, $sql) or die ( "Falha na Busca: " . mysqli_error($conn));
		
		$dados = "
			<div class='col-12'>
			  <div class='box-title no-border'>
				<div class='inner'>
				  <h3 class='section-title'><span>Buscar por</span> categoria</h3>   
				  <a href='category.php' class='sell-your-item'><i class='fas fa-th-large'></i> Ver mais 
				  </a>
				</div>
			  </div>
			</div>  
		"; $segundos = "0s"; $time = 0.0;
			while($sql = mysqli_fetch_array($query)){
				$dados .= "
					<div class='col-lg-2 col-md-3 col-xs-12 f-category i-category wow fadeIn' data-wow-delay='" . $segundos . "'>
					  <a href='category.php?busca=" . $sql['id'] . "'>
						<div class='icon'>
						  <i class='fas'><img src='" . $sql['icone'] ."' style='max-width:100px; max-height:100px; width: auto; height: auto;'></i>
						</div>
						<h6>" . $sql['profissao'] . "</h6> 
					  </a>
					</div>
				";
				$time += 0.2;
				$segundos = $time . "s";
			}	
		echo $dados;
		//mysql_close();
	}

        function descritivo(){
			echo "
			  <div class='col-lg-4 col-md-6 col-xs-12'>
				<div class='features-box wow fadeInDownQuick' data-wow-delay='0.3s'>
				  <div class='features-icon'>
					<i class='fas fa-book'>
					</i>
				  </div>
				  <div class='features-content'>
					<h4>
					  Full Documented
					</h4>
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
					</p>
				  </div>
				</div>
			  </div>
			  <div class='col-lg-4 col-md-6 col-xs-12'>
				<div class='features-box wow fadeInDownQuick' data-wow-delay='0.6s'>
				  <div class='features-icon'>
					<i class='fas fa-paper-plane'></i>
				  </div>
				  <div class='features-content'>
					<h4>
					  Clean & Modern Design
					</h4>
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
					</p>
				  </div>
				</div>
			  </div>
			  <div class='col-lg-4 col-md-6 col-xs-12'>
				<div class='features-box wow fadeInDownQuick' data-wow-delay='0.9s'>
				  <div class='features-icon'>
					<i class='fas fa-map'></i>
				  </div>
				  <div class='features-content'>
					<h4>
					  Great Features
					</h4>
					<p>
					  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo aut magni perferendis repellat rerum assumenda facere. 
					</p>
				  </div>
				</div>
			  </div>
			";
        }

	function itens(){
		$conn = conexao();
		$sql = "SELECT * FROM profissoes ORDER BY profissao ASC";
		$query = mysqli_query($conn, $sql) or die ( "Falha na Busca: " . mysqli_error($conn));
		
		$dados = "";
			while($sql = mysqli_fetch_array($query)){
				$dados .= "
				  <div class='item'>
					<div class='product-item'>
					  <div class='carousel-thumb'>
						<img src='" . $sql['icone'] . "' alt=''> 
						<div class='overlay'>
						  <a href='ads-details.html?busca=" . $sql['id'] . "'><i class='fas fa-link'></i></a>
						</div> 
					  </div>    
					  <a href='ads-details.html?busca=" . $sql['id'] . "' class='item-name'>" . $sql['profissao'] . "</a>  
					  <span class='price'>Media por hora: " . $sql['id'] . "</span>  
					</div>
				  </div>
				";
			}		
		$dados .= "</div></div></div>";	
		
/*		$dados = "
              <div class='item'>
                <div class='product-item'>
                  <div class='carousel-thumb'>
                    <img src='assets/img/product/img4.jpg' alt=''> 
                    <div class='overlay'>
                      <a href='ads-details.html'><i class='fas fa-link'></i></a>
                    </div> 
                  </div> 
                  <a href='ads-details.html' class='item-name'>Lorem ipsum dolor sit</a>  
                  <span class='price'>$149</span> 
                </div>
              </div>
              <div class='item'>
                <div class='product-item'>
                  <div class='carousel-thumb'>
                    <img src='assets/img/product/img5.jpg' alt=''> 
                    <div class='overlay'>
                      <a href='ads-details.html'><i class='fas fa-link'></i></a>
                    </div> 
                  </div>
                  <a href='ads-details.html' class='item-name'>Sed diam nonummy</a>  
                  <span class='price'>$90</span> 
                </div>
              </div>
		";*/
		
		echo $dados;
	}
function contador(){
	echo "
	  <div class='col-lg-3 col-md-6 col-xs-12'>
		<div class='counting wow fadeInDownQuick' data-wow-delay='.5s'>
		  <div class='icon'>
			<span>
			  <i class='lnr lnr-tag'></i>
			</span>
		  </div>
		  <div class='desc'>
			<h3 class='counter'>12090</h3>
			<p>Profissionais registrados</p>
		  </div>
		</div>
	  </div>
	  <div class='col-lg-3 col-md-6 col-xs-12'>
		<div class='counting wow fadeInDownQuick' data-wow-delay='1s'>
		  <div class='icon'>
			<span>
			  <i class='lnr lnr-map'></i>
			</span>
		  </div>
		  <div class='desc'>
			<h3 class='counter'>350</h3>
			<p>Localidades</p>
		  </div>
		</div>
	  </div>
	  <div class='col-lg-3 col-md-6 col-xs-12'>
		<div class='counting wow fadeInDownQuick' data-wow-delay='1.5s'>
		  <div class='icon'>
			<span>
			  <i class='lnr lnr-users'></i>
			</span>
		  </div>
		  <div class='desc'>
			<h3 class='counter'>23453</h3>
			<p>Membros frequentes</p>
		  </div>
		</div>
	  </div>
	  <div class='col-lg-3 col-md-6 col-xs-12'>
		<div class='counting wow fadeInDownQuick' data-wow-delay='2s'>
		  <div class='icon'>
			<span>
			  <i class='lnr lnr-license'></i>
			</span>
		  </div>
		  <div class='desc'>
			<h3 class='counter'>150</h3>
			<p>Premium Ads</p>
		  </div>
		</div>
	  </div>
	";
}	
function planos(){
	$conn = conexao();
	$sql = "SELECT * FROM planos ORDER BY id ASC";
	$query = mysqli_query($conn, $sql) or die ( "Falha na Busca: " . mysqli_error($conn));
		
	$dados = "<div class='row'>";
	$segundos = 0; $ativo = "";
	while($sql = mysqli_fetch_array($query)){
		if($sql['nome'] == "Básico"){
			$ativo = "id='active-tb'";
		} else {
			$ativo = "";
		}
		$dados .= "
		  <div class='col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick' data-wow-delay='" . $segundos . "s'>
			<div class='table wow' " . $ativo . ">
			  <div class='title'>
				<h3>" . $sql['nome'] . "</h3>
			  </div>
			   <div class='pricing-header'>
				  <p class='price-value'> <sup>R$</sup>" . $sql['valor'] . "</p>
				  <p class='price-quality'>por mês</p>
			   </div>
			  <ul class='description'>
		";
		$lista = $sql['dados'];
		$lista = explode(";", $lista);
		foreach($lista as $texto){
			$dados .= "<li><i class='fas fa-check-square'></i>" . $texto . "</li>";
		}
		if(isset($_SESSION['id'])){
			$link = "pagamento.php";
		} else {
			$link = "login.php";
		}
		
		if($sql['id'] == 1){
			$dados .= "</ul><a href='" . $link . "'><button class='btn btn-common' type='submit'>Criar Conta</button></a></div></div>";			
		} else {
			$dados .= "</ul><a href='" . $link . "'><button class='btn btn-common' type='submit'>Contratar</button></a></div></div>";
		}
		$segundos += 0.4;
	}
	/*echo "

		  <div class='col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick' data-wow-delay='0.5s'>
			<div class='table' id='active-tb'>
			  <div class='title'>
				<h3>Standard</h3>
			  </div>
			   <div class='pricing-header'>
				  <p class='price-value'> <sup>$</sup>12</p>
				  <p class='price-quality'>per month</p>
			   </div>
			  <ul class='description'>
				<li><i class='fas fa-check-square'></i>Free ad posting</li>
				<li><i class='fas fa-check-square'></i>6&nbsp;Featured ads availability</li>
				<li><i class='fas fa-check-square'></i>3 Users</li>
				<li><i class='fas fa-check-square'></i>100% Secure!</li>
			  </ul>
			  <button class='btn btn-common' type='submit'>Purchase Now</button>
		   </div> 
		  </div>
		  <div class='col-lg-4 col-md-6 col-xs-12 wow fadeInDownQuick' data-wow-delay='0.8s'>
			<div class='table'>
			  <div class='title'>
				<h3>Platinum</h3>
			  </div>
			   <div class='pricing-header'>
				  <p class='price-value'> <sup>$</sup>29</p>
				  <p class='price-quality'>per month</p>
			   </div>
			  <ul class='description'>
				<li><i class='fas fa-check-square'></i>Free ad posting</li>
				<li><i class='fas fa-check-square'></i>20&nbsp;Featured ads availability</li>
				<li><i class='fas fa-check-square'></i>Unlimited users</li>
				<li><i class='fas fa-check-square'></i>100% Secure!</li>
			  </ul>
			  <button class='btn btn-common' type='submit'>Purchase Now</button>
			</div> 
		  </div>
	";*/
	$dados .= "</div>";
	echo $dados;
}
