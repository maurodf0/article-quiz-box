wp.blocks.registerBlockType('quiz-plugin/article-quiz-block', {
    title: "Article Quiz Block",
    icon: "smiley",
    category: "common",
    attributes: {
        skyColor: {
            type: "string",
            source: "text",
            selector: ".skyColor"
        },
        grassColor: {
            type: "string",
            source: "text",
            selector: ".grassColor"
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
      return (
        <div>
            <p>Today the sky is <span className="skycolor">{props.attributes.skyColor}</span> and the grass is <span className="grassColor">{props.attributes.grassColor}</span></p>
        </div>
        
      )

    }
});