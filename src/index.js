wp.blocks.registerBlockType('quiz-plugin/article-quiz-block', {
    title: "Article Quiz Block",
    icon: "smiley",
    category: "common",
    attributes: {
        skyColor: {
            type: "string",
        },
        grassColor: {
            type: "string",
        }
    },
    edit: function (props) {
        function updateSkyColor(e){
            props.setAttributes({skyColor: e.target.value})
        }

        function updateGrassColor(e){
            props.setAttributes({grassColor: e.target.value})
        }
       return (
        <div>
          <input type="text" placeholder="sky color" onChange={updateSkyColor} value={props.attributes.skyColor} />
          <input type="text" placeholder="grass color" onChange={updateGrassColor} value={props.attributes.grassColor} />  
       </div>
       )
    },
    save: (props) => {
        //in the save function you cna display and save the info, but returning null you can use Php for display the data via DB
      return null
    }
});