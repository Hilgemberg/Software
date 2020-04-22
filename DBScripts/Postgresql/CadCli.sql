CREATE TABLE TBLCliente (
  CodigoCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  Nomecliente VARCHAR(60) NULL,
  TipoPessoa INTEGER UNSIGNED NOT NULL,
  Genero INTEGER UNSIGNED NULL,
  CPF VARCHAR(11) NULL,
  DataNascimento DATE NULL,
  LocalNascimento VARCHAR(60) NULL,
  EstadoNascimento INTEGER UNSIGNED NULL,
  Pai VARCHAR(60) NULL,
  Mae VARCHAR(60) NULL,
  DocIdentificacao VARCHAR(15) NULL,
  TipoDocIdentificacao INTEGER UNSIGNED NULL,
  OrgãoEmissorDoc INTEGER UNSIGNED NULL,
  EstadoEmisDocumento INTEGER UNSIGNED NULL,
  EstadoCivil INTEGER UNSIGNED NULL,
  Conjugue INTEGER UNSIGNED NULL,
  Endereço INTEGER UNSIGNED NULL,
  StatusCadastro INTEGER UNSIGNED NULL,
   PRIMARY KEY(CodigoCliente)
);

CREATE TABLE TblTipoPessoa (
  CodigoTipoPessoa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoPessoa VARCHAR(20) NULL,
  PRIMARY KEY(CodigoTipoPessoa)
);

CREATE TABLE TblTipoGenero (
  CodigoGenero INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoGenero VARCHAR(30) NULL,
  PRIMARY KEY(CodigoGenero)
);

CREATE TABLE TblEstadoCivil (
  CodigoEstadoCivil INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoEstadoCivil VARCHAR(30) NULL,
  PRIMARY KEY(CodigoEstadoCivil)
);

CREATE TABLE TblRegimeCasamento (
  CodigoRegimeCasamento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoRegimeCasamento VARCHAR(50) NULL,
  TipoAssinaturaCasamento INTEGER UNSIGNED NULL,
  PRIMARY KEY(CodigoRegimeCasamento)
);

CREATE TABLE TblTipoDocumento (
  CodigoTipoDocumento INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoDocumento VARCHAR(20) NULL,
  PRIMARY KEY(CodigoTipoDocumento)
);

CREATE TABLE TblTipoRenda (
  CodigoTipoRenda INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoTipoRenda VARCHAR(30) NULL,
  PRIMARY KEY(CodigoTipoRenda)
);

CREATE TABLE TblRenda (
  CodigoRenda INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoCliente INTEGER UNSIGNED NULL,
  StatusRenda INTEGER UNSIGNED NULL,
  TipoRenda INTEGER UNSIGNED NULL,
  DataAtualizacao DATETIME NULL,
  ValorRenda FLOAT NULL,
  PRIMARY KEY(CodigoRenda)
);

CREATE TABLE TblTipoTelefone (
  CodigoTipoTelefone INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoTipoTelefone VARCHAR(20) NULL,
  PRIMARY KEY(CodigoTipoTelefone)
);

CREATE TABLE TblTelefone (
  CodigoTelefone INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoCliente INTEGER UNSIGNED NULL,
  TipoTelefone INTEGER UNSIGNED NULL,
  StatusTelefone INTEGER UNSIGNED NULL,
  NumTelefone VARCHAR(11) NULL,
  DataAtualizacao DATETIME NULL,
  DescTelefone VARCHAR(20) NULL,
  PRIMARY KEY(CodigoTelefone)
);

CREATE TABLE TblFederacao (
  CodigoFederacao INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoFederacao VARCHAR(30) NULL,
  UFFederacao VARCHAR(2) NULL,
  PRIMARY KEY(CodigoFederacao)
);

CREATE TABLE TblTipoEndereço (
  CodigoTipoEndereco INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoEndereco VARCHAR(20) NULL,
  PRIMARY KEY(CodigoTipoEndereco)
);

CREATE TABLE TBLEndereco (
  CodigoEndereco INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoCliente INTEGER UNSIGNED NULL,
  TipoEndereco INTEGER UNSIGNED NULL,
  CEP VARCHAR(8) NULL,
  TipoLogradouro VARCHAR(30) NULL,
  NomeLogradouro VARCHAR(50) NULL,
  Bairro VARCHAR(60) NULL,
  Cidade VARCHAR(60) NULL,
  CodigoUF INTEGER UNSIGNED NULL,
  PRIMARY KEY(CodigoEndereco)
);

CREATE TABLE TblConjugue (
  CodigoConjugue INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoClienteRelacionado INTEGER UNSIGNED NULL,
  CodigoTipoPessoa INTEGER,
  Nome VARCHAR(60) NULL,
  CPF VARCHAR(11) NULL,
  TipoDocumento INTEGER UNSIGNED NULL,
  NumeroDocumento VARCHAR(15),
  OrgaoEmissor INTEGER UNSIGNED NULL,
  EstadoCivil INTEGER UNSIGNED NULL,
  TipoRegimeCasamento INTEGER UNSIGNED NULL,
  CidadeNascimento VARCHAR(50) NULL,
  CodigoEstado INTEGER UNSIGNED NULL,
  DataNascimento DATE NULL,
  NomePai VARCHAR(60) NULL,
  NomeMae VARCHAR(60) NULL,
  Renda INTEGER UNSIGNED NULL,
  Telefones INTEGER UNSIGNED NULL,
  PRIMARY KEY(CodigoConjugue)
);

CREATE TABLE TblSerasa (
  CodigoSerasa INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoCliente INTEGER UNSIGNED NULL,
  DataConsultaSerasa DATETIME NULL,
  ScorSerasa INTEGER UNSIGNED NULL,
  Protesto INTEGER UNSIGNED NULL,
  ValorProtesto FLOAT,
  ChequesDevolvidos INTEGER UNSIGNED NULL,
  Endividamento FLOAT,
  CapacidadePagamento FLOAT NULL,
  StatusConsulta INTEGER UNSIGNED NULL,
  TotalEmAtraso FLOAT,
  PRIMARY KEY(CodigoSerasa)
);

CREATE TABLE TblTipoBens (
  CodigoTipoBens INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoTipoBens VARCHAR(30) NULL,
  PRIMARY KEY(CodigoTipoBens)
);

CREATE TABLE TblCadastroBensCliente (
  CodigoCadastroBensCliente INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoCliente INTEGER UNSIGNED NULL,
  CodigoTipoBem INTEGER UNSIGNED NULL,
  AnoFabricacao VARCHAR(4) NULL,
  AnoModelo VARCHAR(4) NULL,
  ChasiBem VARCHAR(10)NULL,
  PlacaBem VARCHAR(10) NULL,
  StatusBem INTEGER UNSIGNED NULL,
  DataCompra DATE NULL,
  ValorCompraBem FLOAT NULL,
  PRIMARY KEY(CodigoCadastroBensCliente)
);

CREATE TABLE TblAtualizacaoBens (
  CodigoAtualizacaoBens INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  CodigoBem INTEGER UNSIGNED NULL,
  DataAtualizacao DATETIME NULL,
  ValorAtualBem FLOAT NULL,
  StatusBem INTEGER UNSIGNED NULL,
  PRIMARY KEY(CodigoAtualizacaoBens)
);

CREATE TABLE TblTipoAssinatura (
  CodigotipoAssinatura INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoTipoAssinatura VARCHAR(30) NULL,
  PRIMARY KEY(CodigotipoAssinatura)
);

CREATE TABLE TblStatus (
  CodigoStatus INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
  DescricaoStatus VARCHAR(30) NULL,
  PRIMARY KEY(CodigoStatus)
);