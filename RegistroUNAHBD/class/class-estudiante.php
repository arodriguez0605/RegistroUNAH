<?php

	class Estudiante{

		private $pNOmbre;
		private $sNombre;
		private $pApellido;
		private $sApellido;
		private $cuenta;
		private $correoElectronico;
		private $direccion;
		private $telefono;
		private $contrasena;
		private $fechaNacimiento;
		private $centroEstudio;
		private $fechaIngreso;
		private $carrera;

		public function __construct($pNOmbre,
					$sNombre,
					$pApellido,
					$sApellido,
					$cuenta,
					$correoElectronico,
					$direccion,
					$telefono,
					$contrasena,
					$fechaNacimiento,
					$centroEstudio,
					$fechaIngreso,$carrera){
			$this->pNOmbre = $pNOmbre;
			$this->sNombre = $sNombre;
			$this->pApellido = $pApellido;
			$this->sApellido = $sApellido;
			$this->cuenta = $cuenta;
			$this->correoElectronico = $correoElectronico;
			$this->direccion = $direccion;
			$this->telefono = $telefono;
			$this->contrasena = $contrasena;
			$this->fechaNacimiento = $fechaNacimiento;
			$this->centroEstudio = $centroEstudio;
			$this->fechaIngreso = $fechaIngreso;
			$this->carrera = $carrera;
		}
		public function getPNOmbre(){
			return $this->pNOmbre;
		}
		public function setPNOmbre($pNOmbre){
			$this->pNOmbre = $pNOmbre;
		}
		public function getSNombre(){
			return $this->sNombre;
		}
		public function setSNombre($sNombre){
			$this->sNombre = $sNombre;
		}
		public function getPApellido(){
			return $this->pApellido;
		}
		public function setPApellido($pApellido){
			$this->pApellido = $pApellido;
		}
		public function getSApellido(){
			return $this->sApellido;
		}
		public function setSApellido($sApellido){
			$this->sApellido = $sApellido;
		}
		public function getCuenta(){
			return $this->cuenta;
		}
		public function setCuenta($cuenta){
			$this->cuenta = $cuenta;
		}
		public function getCorreoElectronico(){
			return $this->correoElectronico;
		}
		public function setCorreoElectronico($correoElectronico){
			$this->correoElectronico = $correoElectronico;
		}
		public function getDireccion(){
			return $this->direccion;
		}
		public function setDireccion($direccion){
			$this->direccion = $direccion;
		}
		public function getTelefono(){
			return $this->telefono;
		}
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
		public function getContrasena(){
			return $this->contrasena;
		}
		public function setContrasena($contrasena){
			$this->contrasena = $contrasena;
		}
		public function getFechaNacimiento(){
			return $this->fechaNacimiento;
		}
		public function setFechaNacimiento($fechaNacimiento){
			$this->fechaNacimiento = $fechaNacimiento;
		}
		public function getCentroEstudio(){
			return $this->centroEstudio;
		}
		public function setCentroEstudio($centroEstudio){
			$this->centroEstudio = $centroEstudio;
		}
		public function getFechaIngreso(){
			return $this->fechaIngreso;
		}
		public function setFechaIngreso($fechaIngreso){
			$this->fechaIngreso = $fechaIngreso;
		}
		public function __toString(){
			return "PNOmbre: " . $this->pNOmbre . 
				" SNombre: " . $this->sNombre . 
				" PApellido: " . $this->pApellido . 
				" SApellido: " . $this->sApellido . 
				" Cuenta: " . $this->cuenta . 
				" CorreoElectronico: " . $this->correoElectronico . 
				" Direccion: " . $this->direccion . 
				" Telefono: " . $this->telefono . 
				" Contrasena: " . $this->contrasena . 
				" FechaNacimiento: " . $this->fechaNacimiento . 
				" CentroEstudio: " . $this->centroEstudio . 
				" FechaIngreso: " . $this->fechaIngreso;
		}


		public function guardarEstudiante($conexion){
			$sql = sprintf(
				" DECLARE
  					PNCODIGOPERSONA NUMBER;
  					PCPNOMBRE VARCHAR2(200);
  					PCSNOMBRE VARCHAR2(200);
  					PCPAPELLIDO VARCHAR2(200);
  					PCSAPELLIDO VARCHAR2(200);
  					PCDIRECCION VARCHAR2(200);
  					PCGENERO VARCHAR2(200);
 					PDFECHANACIMIENTO DATE;
  					PNCODIGOESTUDIANTE NUMBER;
  					PNNUMEROCUENTA NUMBER;
 					 PDFECHAINGRESO DATE;
 					 PNCODIGOUSUARIO NUMBER;
  					PNCODIGOCENTROESTUDIO NUMBER;
  					PNACCION NUMBER;
  					PNCODIGOCARRERA NUMBER;
  					MENSAJEERROR VARCHAR2(200);
			BEGIN
  					PNCODIGOPERSONA := NULL;
 					 PCPNOMBRE := '".$this->pNOmbre."';
  					PCSNOMBRE := '".$this->sNombre."';
  					PCPAPELLIDO := '".$this->pApellido."';
  					PCSAPELLIDO := '".$this->sApellido."';
 					 PCDIRECCION := '".$this->direccion."';
  					PCGENERO := NULL;
  					PDFECHANACIMIENTO := '".$this->fechaNacimiento."';
  					PNCODIGOESTUDIANTE := NULL;
  					PNNUMEROCUENTA :='".$this->cuenta."';
  					PDFECHAINGRESO := '".$this->fechaIngreso."';
  					PNCODIGOUSUARIO := NULL;
  					PNCODIGOCENTROESTUDIO := ".$this->centroEstudio.";
  					PNACCION := NULL;
  					PNCODIGOCARRERA := ".$this->carrera.";

  					SP_REGISTRO_DE_ESTUDIANTE(
   					 PNCODIGOPERSONA => PNCODIGOPERSONA,
    				PCPNOMBRE => PCPNOMBRE,
    				PCSNOMBRE => PCSNOMBRE,
    				PCPAPELLIDO => PCPAPELLIDO,
    				PCSAPELLIDO => PCSAPELLIDO,
    				PCDIRECCION => PCDIRECCION,
    				PCGENERO => PCGENERO,
    				PDFECHANACIMIENTO => PDFECHANACIMIENTO,
    				PNCODIGOESTUDIANTE => PNCODIGOESTUDIANTE,
    				PNNUMEROCUENTA => PNNUMEROCUENTA,
    				PDFECHAINGRESO => PDFECHAINGRESO,
    				PNCODIGOUSUARIO => PNCODIGOUSUARIO,
    				PNCODIGOCENTROESTUDIO => PNCODIGOCENTROESTUDIO,
    				PNACCION => PNACCION,
    				PNCODIGOCARRERA => PNCODIGOCARRERA,
    				MENSAJEERROR => MENSAJEERROR
  					);
  
  
					--rollback; 
					END;"
				    );
            
			$resultado = $conexion->ejecutarConsulta($sql);
			echo "Almacenado con éxito";
		}

}

?>