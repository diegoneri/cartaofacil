<?php
?>

<table>
	<tr>
		<td align="right" colspan="4">
			exportar relat�rio		
		</td>
	</tr>
	<tr>
		<td align="left" colspan="2">
			Relat�rio de Quebra de Presentes - <NOME_EC>
		</td>
		<td align="right" colspan="2">
			<select id="listaTiposRelatorios" name="listaTiposRelatorios">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>	
			<input type="button" id="btnOkTipoRelatorio" name="btnOkTipoRelatorio" value="OK"/>	
		</td>		
	</tr>
	<tr>
		<td id="colunaSemConteudo">
			&nbsp;
		</td>
		<td align="right">
			<select id="listaTipoEstruturaComercial" name="listaTipoEstruturaComercial">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>	
			<input type="button" id="btnOkTipoEC" name="btnOkTipoEC" value="OK"/>	
		</td>		
		<td align="right">
			<select id="listaEstruturaComercial" name="listaEstruturaComercial">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>	
			<input type="button" id="btnOkEC" name="btnOkEC" value="OK"/>	
		</td>		
		<td align="right" colspan="2">
			<select id="listaCiclosEstrategia" name="listaCiclosEstrategia">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
			</select>	
			<input type="button" id="btnOkCiclosEstrategia" name="btnOkCiclosEstrategia" value="OK"/>	
		</td>				
						
	</tr>
	<tr>
		<td colspan="2">
		<!-- In�cio do conte�do -->
		<table id="tabelaConteudoRelatorio">
			<!-- T�tulos -->
			<tr id="linhaTitulo">
				<th>
					C�digo
				</th>
				<th>
					Descri��o
				</th>
				<th>
					Pontua��o
				</th>
				<th>
					Quantidade
				</th>
				<th>
					Receita
				</th>
				<th>
					Cota
				</th>								
			</tr>
			<!-- Fim T�tulos -->
			<!-- Colunas de Conte�do -->
			<tr id="linhaConteudo">
			<!-- Fazer loop... -->
				<td>
					0
				</td>
				<td>
					1
				</td>
				<td>
					2
				</td>
				<td>
					3
				</td>
				<td>
					4
				</td>
				<td>
					5
				</td>
				<!-- Fazer loop... -->																				
			</tr>
			<!-- Fim Colunas de Conte�do -->
		</table>
		<!-- Fim do conte�do -->
		</td>
	</tr>			
</table>