<?php

namespace App\Validation;

class CNPJ{
    /**
     * Método para validar o CNPJ
     *
     * @param string $cnpj
     * @return boolean
     */
    public static function validar($cnpj){
        //vai retirar todos os caracteres especiais e vai deixar somente números
        $cnpj = preg_replace('/\D/','',$cnpj);
        //vai verificar se foi passado todos os 14 números que compõe um cnpj
        if(strlen($cnpj) != 14){
            return false;
        }

        //vai pegar somente os 12 números do cnpj
        $cnpjValidacao = substr($cnpj,0,12);

        //vai calcular e concatenar com primeiro dígito validor
        $cnpjValidacao .= self::calcularDigitorValidor($cnpjValidacao);
        //vai calcular e concatenar com segundo dígito validor
        $cnpjValidacao .= self::calcularDigitorValidor($cnpjValidacao);
        
        
        return $cnpjValidacao == $cnpj;
    }

    /**
     * Método responsavel por calcular a validação e retornar os digitos verificador
     *
     * @param string $base
     * @return int
     */
    public static function calcularDigitorValidor($base){
        //Pega o tamanho do cnpj
        $tamanho = strlen($base);
        $multiplicador = [5,4,3,2,9,8,7,6,5,4,3,2];
        
        
        if($tamanho == 12){
            $multiplicador;
       }else{
           array_unshift($multiplicador, 6);
           
       }
        $soma = 0;

        for($i=0; $i < $tamanho; $i++){
            $soma += $base[$i] * $multiplicador[$i];
            
        }

        $resto = $soma % 11;

        $resto = $resto < 2 ? 0 : 11 - $resto;
        
        return $resto;
    }

    

}