<?php
    class Usuario{
        private $id;
        private $nome;
        private $sobrenome;
        private $sexo;
        private $telefone;
        private $cpf;
        private $cep;
        private $endereco;
        private $estado;
        private $cidade;
        private $bairro;
        private $email;
        private $senha;
        
        // 
        public function setId($id){
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }
        
        public function setNome($nome){
            $this->nome = $nome;
        }

        public function getNome(){
            return $this->nome;
        }

        public function setSobrenome($sobrenome){
            $this->sobrenome = $sobrenome;
        }

        public function getSobrenome(){
            return $this->sobrenome;
        }

        public function setSexo($sexo){
            $this->sexo = $sexo;
        }

        public function getSexo(){
            return $this->sexo;
        }

        public function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        public function getTelefone(){
            return $this->telefone;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getCpf(){
            return $this->cpf;
        }

        private function setCep($cep){
            $this->cep = $cep;
        }

        private function getCep(){
            return $this->cep;
        }

        private function setEndereco($endereco){
            $this->endereco = $endereco;
        }

        private function getEndereco(){
            return $this->endereco;
        }

        private function setEstado($estado){
            $this->estado = $estado;
        }

        private function getEstado(){
            return $this->estado;
        }

        private function setCidade($cidade){
            $this->cidade = $cidade;
        }

        private function getCidade(){
            return $this->cidade;
        }

        private function setBairro($bairro){
            $this->bairro -> $bairro;
        }

        private function getBairro(){
            return $this->bairro;
        }

        private function setEmail($email){
            $this->email = $email;
        }

        private function getEmail(){
            return $this->email;
        }

        private function setSenha($senha){
            $this->senha = $senha;
        }

        private function getSenha(){
            return $this->senha;
        }
    } 
    
    interface UsuarioDAO{
        public function adicionarUsuario(Usuario $u);
        public function buscarUsuarioPeloId($id);
        public function buscarTodosUsuarios();
        public function atualizarUsuario(Usuario $u);
        public function deletarUsuario($id);
    }
?>