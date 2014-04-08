
<?php include("exemple.html") ; ?>


    <div id="gantt_here" style='width:100%; height:520px;'></div>
    <div>
      <button onclick="test()">valider</button>
    </div>
    <script type="text/javascript">
        gantt.init("gantt_here"); 
        gantt.config.xml_date = "%Y-%m-%d";
        gantt.init("gantt_here");

gantt.load('data.php?projet=<?php echo $_GET['projet'];  ?>');//loads data to Gantt from the databas
var dp=new dataProcessor('data.php?projet=<?php echo $_GET['projet'];  ?>');   
dp.init(gantt);



//******************



gantt.config.scale_unit = "day";
gantt.config.step = 1;
gantt.config.date_scale = "%d";
 
gantt.init("gantt_here");

//********************
gantt.templates.task_text=function(start,end,task){
    return "<b>Text:</b> "+task.text+",<b> Holders:</b> "+task.id;
};
gantt.init("gantt_here");





    </script>
</body>
</html>