<html>
<head>
</head>

<body>

<form action="new2.php" method="post">
        
           
                <label>Please pick your county</label>
                <select id="county" name="county">
                        <option value="fulton">Fulton</option>
                        <option value="dekalb">Dekalb</option>
				</select>
				
				
            
                <label >Veteran Status</label>
                    <select id="county" name="veteran">
                        <option  value="veteran">I am a veteran.</option>
                        <option value="notVeteran">I am not a veteran.</option>
                        <option value="notIdentify">I choose not to identify.</option>
                    </select>
		
		
                <label >Do you have a dissability?</label>
                    <select id="diss" name="diss">
						<option value="no">No</option>
						<option value="yes">Yes</option> 
                    </select>
            
        
            <label >What type of charitable resource(s) are you looking for?</label>
                <select id="shel" name="shelter">
                    <option value="none">None</option>
                    <option value="charitableOrg">Charitable organization</option>
                    <option value="male">Male-only shelter</option>
                    <option value ="women">Women-only shelter</option>
                    <option value="family">Family shelter</option>
                    <option value="youth">Youth shelter</option>
                    <option value="Emergency">Emergency shelter</option>
                </select>
               <input type="submit" value="Submit">
               <input type="reset" value="reset">
 </form> 
       
</body>
</html>